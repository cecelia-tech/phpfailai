<?php

abstract class Stogas implements Planas, PlanasStogui{

    public function DoStogas()
    {
    $k1 = $this->getKampas1();
    $k2 = $this->getKampas2();
    $k3 = $this->getKampas3();
    $k4 = $this->getKampas4();
    return $k1 + $k2 + $k3 + $k3 + $k4;
    }
    public function lietausLatakai()
    {

    }
}