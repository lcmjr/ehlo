<?php

use Illuminate\Database\Seeder;

class SeederEquipe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for($i=0;$i<5;$i++) {
            DB::table('equipe')->insert(
                array(
                    'titulo' => "teste",
                    'foto' => "equipe.jpg",
                    'texto' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et urna in libero vestibulum suscipit nec quis purus. Donec a dui sem. Suspendisse a feugiat odio. Duis nec fermentum nunc. Nunc convallis ipsum at suscipit fermentum. Sed nec tincidunt est. Maecenas dignissim pulvinar nulla, ut pharetra massa. Vestibulum scelerisque est vestibulum ligula semper hendrerit. Aenean nulla turpis, dignissim in gravida ac, fermentum eget neque. Donec vitae est pellentesque, vehicula justo et, pellentesque lorem.<br/>Cras blandit neque a tincidunt viverra. Fusce vulputate tellus quis orci rutrum, eu viverra magna feugiat. Maecenas commodo nibh a felis porttitor pellentesque. Vestibulum consequat efficitur pulvinar. Praesent sed leo imperdiet mauris suscipit venenatis. Phasellus facilisis, dui eu luctus posuere, sapien velit elementum risus, ut tincidunt ante felis at nulla. Ut condimentum sed quam sit amet finibus. Aenean gravida volutpat consectetur. Sed mi sapien, tempor nec sem eget, suscipit malesuada sem. Curabitur ac mauris commodo, tincidunt tortor id, pulvinar est. Cras lobortis libero non massa interdum maximus vel id lacus. Etiam elementum enim quis sapien dignissim, id varius leo consectetur. Sed quis purus at ligula euismod feugiat et sed urna. Curabitur at vestibulum mi, ut fringilla lorem. Mauris id augue sagittis, porta est ut, aliquet purus. Quisque in tempor augue, a sagittis purus.",
                    'linkedin' => "http://linkedin.com/",
                )
            );
        }
    }
}
