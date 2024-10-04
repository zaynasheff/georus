<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Zaynasheff\Georus\App\Models\City;
use Zaynasheff\Georus\App\Models\Region;


class RegionsCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::query()->truncate();

        $csvFile = fopen(base_path("database/data/regions.csv"), "r");

        $firstline = true;

        $dataArr = array();

        while (($data = fgetcsv($csvFile, 100, ";")) !== FALSE) {
            try {
                if (!$firstline) {

                    if (isset($data[0]) && isset($data[1])){
                        array_push($dataArr, [
                            'region_id'=>$data[0],
                            'title'=>$data[1],
                            'created_at'=>now(),
                            'updated_at'=>now(),

                        ]);
                    }

                }
                $firstline = false;
            }
            catch (\Exception $exception){
                dd($exception->getMessage());
            }

        }
        Region::query()->insert($dataArr);
        fclose($csvFile);


        City::query()->truncate();

        $csvFile = fopen(base_path("database/data/cities.csv"), "r");

        $firstline = true;

        $dataArr = array();

        while (($data = fgetcsv($csvFile, 2500, ";")) !== FALSE) {

            if (!$firstline) {
                array_push($dataArr, [
                    "title"=> $data[1],
                    "region" => $data[2],
                    "region_id" => $data[3],
                    "district" => $data[4],
                    "population" => $data[5],
                    "founded" => $data[6],
                    'created_at'=>now(),
                    'updated_at'=>now(),

                ]);

            }
            $firstline = false;
        }
        City::query()->insert($dataArr);
        fclose($csvFile);

    }
}
