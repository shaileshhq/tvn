<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $list = array(
            array('id' => '13','image' => 'tvn-School-1598523346.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '14','image' => 'tvn-School-1598523360.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '15','image' => 'tvn-School-1598523371.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '16','image' => 'tvn-School-1598523380.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '17','image' => 'tvn-School-1598523390.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '18','image' => 'tvn-School-1598523404.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '19','image' => 'tvn-School-1598523412.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '20','image' => 'tvn-School-1598523420.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '21','image' => 'tvn-School-1598523433.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '22','image' => 'tvn-School-1598523446.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '23','image' => 'tvn-School-1598523453.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '24','image' => 'tvn-School-1598523460.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '25','image' => 'tvn-School-1598523470.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '26','image' => 'tvn-School-1598523479.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '27','image' => 'tvn-School-1598523486.jpg','title' => 'tvn School','status' => '0'),
            array('id' => '28','image' => 'YOGA-DAY-21-JUNE-2022-1656046450.jpeg','title' => 'YOGA DAY 21 JUNE 2022','status' => '0'),
            array('id' => '29','image' => 'YOGA-DAY-02-1656046525.jpeg','title' => 'YOGA DAY 02','status' => '0'),
            array('id' => '30','image' => '','title' => 'HAR GHAR TIRANGA MOVEMENT 2022','status' => '0'),
            array('id' => '31','image' => 'INDEPENDANCE-DAY-CELEBRATION-15-AUG-2022-1660638248.jpeg','title' => 'INDEPENDANCE DAY CELEBRATION 15 AUG 2022','status' => '0'),
            array('id' => '32','image' => 'INDEPENDENCE-DAY-CELEBRATION-15-AUG-2022-1660638329.jpeg','title' => 'INDEPENDENCE DAY CELEBRATION-15 AUG 2022','status' => '0'),
            array('id' => '33','image' => 'Independence-Day-Celebration-15-Aug.22-1660638596.jpeg','title' => 'Independence Day Celebration-15 Aug.22','status' => '0'),
            array('id' => '34','image' => 'Independence-Day-Celebration-15-Aug.22-1660638963.jpeg','title' => 'Independence Day Celebration-15 Aug.22','status' => '0'),
            array('id' => '35','image' => '15-AUG-2022-CELEBRATION-1660639857.jpeg','title' => '15 AUG 2022 CELEBRATION','status' => '0'),
            array('id' => '36','image' => 'tvn-School-1670315621.jpeg','title' => 'tvn School','status' => '0'),
            array('id' => '37','image' => 'tvn-School-1670315631.jpeg','title' => 'tvn School','status' => '0'),
            array('id' => '38','image' => 'tvn-School-1670315639.jpeg','title' => 'tvn School','status' => '0'),
            array('id' => '39','image' => 'tvn-School-1670315647.jpeg','title' => 'tvn School','status' => '0'),
            array('id' => '40','image' => 'tvn-School-1670315658.jpeg','title' => 'tvn School','status' => '0'),
            array('id' => '41','image' => 'tvn-School-1670315670.jpeg','title' => 'tvn School','status' => '0')
          );

        foreach($list as $data){
            DB::table('galleries')->insert([
                'title' => $data['title'],
                'image' => 'gallery/' .$data['image'],
                'status' => 1,
            ]);
        }
    }
}
