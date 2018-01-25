<?php

class PagesController
{

    public function home() 
    {

        return view('index');

    }

    public function about()
    {

        return view('about', ['users' => $users]);

    }

    public function contact() 
    {

        return view('contact', ['users' => $users]);

    }

}