<?php
 
use App\Models\User;
 
class SentrySeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();
 
        Sentry::getUserProvider()->create(array(
            'email'       => 'christoffer@debito.dk',
            'password'    => "123456",
            'first_name'  => 'Christoffer',
            'last_name'   => 'Baadsgaard',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));
 
        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('christoffer@debito.dk');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }
 
}