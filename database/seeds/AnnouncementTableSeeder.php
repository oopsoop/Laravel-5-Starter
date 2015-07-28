<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Announcement;
class AnnouncementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FOR($i=0;$i<=20;$i++){
            $announcement=new Announcement;
            $announcement->title=str_random(10);
            $announcement->binfo=true;
            $announcement->message=str_random(40);
            $announcement->save();
            
            $announcement=new Announcement;
            $announcement->title=str_random(10);
            $announcement->binfo=false;
            $announcement->message=str_random(40);
            $announcement->save();
        }
        //
    }
}
