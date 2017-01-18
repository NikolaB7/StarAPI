<?php

namespace

{
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $this->call(AclCollectionSeeder::class);
            $this->call(ValidationsSeeder::class);
            $this->call(ListenerRulesSeeder::class);
            $this->call(AdapterRulesSeeder::class);
        }
    }
}
