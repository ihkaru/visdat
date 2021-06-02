<?php namespace App\Libraries;

class Dashboards{
    public function covid()
    {
        return view('components/dashcovid');
    }
    public function inflasi()
    {
        return view('components/dashinflasi');
    }
    public function eksporimpor()
    {
        return view('components/dasheksporimpor');
    }
    public function peta()
    {
        return view('components/dashpeta');
    }
}