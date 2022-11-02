<?php

declare(strict_types=1);

class DoctorEdit {
    //TODO: Get doctors from sql
public $doctors = array(
    array(
        'name' => 'Иванов Иван', 
        'specialty' => 'Хирург'
    ),
    array(
        'name' => 'Иванов Маским', 
        'specialty' => 'Врач'
    ),
    array(
        'name' => 'Иванов Руслан', 
        'specialty' => 'Терапевт'
    ),
    array (
        'name' => 'Петров Алексей',
        'specialty' => 'Кардиолог'
    ),
    array(
        'name' => 'Сидоров Дмитрий', 
        'specialty' => 'Врач общей практики'
    ));
    
    public function removeAllDoctorByName($remove) {
    foreach($this->doctors as $doctor => $card){
        $name = $card['name'];
        //var_dump($name);
        //var_dump($card);
        if(strpos($name, $remove) !== false) {
            echo "Удаляем врача ".$name."\n";
            //echo array_search($card, $this->doctors);
            unset($this->doctors[array_search($card, $this->doctors)]);
        }
    }
    
    return var_dump($this->doctors);
    }
}

$rmDoctor = new DoctorEdit();

$rmDoctor->removeAllDoctorByName("Иванов");

?>
