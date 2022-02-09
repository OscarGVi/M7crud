<?php

namespace Database\Seeders;

use App\Models\Campio;
use Illuminate\Database\Seeder;

class CampioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $text = file_get_contents('http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion.json');
        $json = json_decode($text);


        foreach ($json->data as $campio) {

            $lore = file_get_contents('http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion/'.$campio->id.'.json');
            $lorejson = json_decode($lore,true);

            Campio::create([
                'idlol' => $campio->id,
                'nom' => $campio->name,
                'desc_curta' => $campio->title,
                'desc_llarga' => $lorejson['data'][$campio->id]['lore'],
                'foto_petita' => 'http://ddragon.leagueoflegends.com/cdn/12.2.1/img/champion/'.$campio->image->full,
                'foto_gran' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/loading/'.$campio->id.'_0.jpg'
            ]);
        }
    }
}
