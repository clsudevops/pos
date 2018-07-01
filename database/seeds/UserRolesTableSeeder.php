<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'uuid' => Uuid::generate(4),
                'name' => 'ADMINISTRATOR',
                'create_item' => 1,
                'edit_item' => 1,
                'delete_item' => 1,
                'create_customer' => 1,
                'edit_customer' => 1,
                'delete_customer' => 1,
                'create_employee' => 1,
                'edit_employee' => 1,
                'delete_employee' => 1,
                'create_supplier' => 1,
                'edit_supplier' => 1,
                'delete_supplier' => 1,
                'create_transaction' => 1,
                'edit_transaction' => 1,
                'delete_transaction' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
