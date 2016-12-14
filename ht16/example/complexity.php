<?php

function doit1()
{
    if (hours < 24 && minutes < 60 && seconds < 60) {
        return true;
    } else {
        return false;
    }
}



function doit2()
{
    return hours < 24 && minutes < 60 && seconds < 60;
}
