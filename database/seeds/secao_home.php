<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class secao_home extends Seeder{

    public function run(){
        DB::table('secao_home')->insert(array(
            [ 'texto' => "porque existimos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu dui tincidunt, rhoncus mi at, blandit nisl. Nulla facilisi. Vivamus pharetra tortor non augue ornare eleifend. Vestibulum semper erat vel tristique efficitur. Cras pharetra tincidunt sem, non tristique purus commodo non. Fusce ut ante dui."],
            [ 'texto' => "porque existimos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu dui tincidunt, rhoncus mi at, blandit nisl. Nulla facilisi. Vivamus pharetra tortor non augue ornare eleifend. Vestibulum semper erat vel tristique efficitur. Cras pharetra tincidunt sem, non tristique purus commodo non. Fusce ut ante dui."],
            [ 'texto' => "porque existimos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu dui tincidunt, rhoncus mi at, blandit nisl. Nulla facilisi. Vivamus pharetra tortor non augue ornare eleifend. Vestibulum semper erat vel tristique efficitur. Cras pharetra tincidunt sem, non tristique purus commodo non. Fusce ut ante dui."],
            [ 'texto' => "porque existimos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu dui tincidunt, rhoncus mi at, blandit nisl. Nulla facilisi. Vivamus pharetra tortor non augue ornare eleifend. Vestibulum semper erat vel tristique efficitur. Cras pharetra tincidunt sem, non tristique purus commodo non. Fusce ut ante dui."],
            [ 'texto' => "porque existimos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu dui tincidunt, rhoncus mi at, blandit nisl. Nulla facilisi. Vivamus pharetra tortor non augue ornare eleifend. Vestibulum semper erat vel tristique efficitur. Cras pharetra tincidunt sem, non tristique purus commodo non. Fusce ut ante dui."]
        ));
    }
}
