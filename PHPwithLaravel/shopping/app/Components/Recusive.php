<?php
namespace App\Components;

class Recusive{
    private $data;
    private $htmlSelect = '';

    public function __construct($data){
        $this->data = $data;
    }
    public function categoryRecusive($parent_id, $id = 0, $text = '')
    {
        //Qui tắc của nó
        //        $data = Category::all();
//        foreach ($data as $value) {
//
//            if ($value['parent_id'] == 0) {
//                echo "<option>" . $value['name'] . "</option>";
//
//                foreach ($data as $value2) {
//                    if ($value2['parent_id'] == $value['id']) {
//                        echo "<option>" . $value2['name'] . "</option>";
//                        foreach ($data as $value3) {
//                            if ($value3['parent_id'] == $value2['id']) {
//                                echo "<option>" . $value3['name'] . "</option>";
//                            }
//                        }
//                    }
//                }
//
//            }
//
//        }
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if(! empty($parent_id) && $parent_id == $value['id'])
                {
                    $this->htmlSelect .= "<option selected value='". $value['id'] ."'>" .$text. $value['name'] . "</option>";
                }
                else{
                    $this->htmlSelect .= "<option value='". $value['id'] ."'>" .$text. $value['name'] . "</option>";
                }

                $this->categoryRecusive($parent_id, $value['id'], $text.'-');
            }
        }
        return $this->htmlSelect;
    }
}
