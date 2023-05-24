<?php

function NewName( string $name ) : int
{
    $file="names.txt";
    $names=explode("\n",file_get_contents($file));
    if(!in_array($name,$names))
    {
        $names[]=$name;
    }
    sort($names);
    file_put_contents($file, "");
    foreach($names as $old_name)
    {
        if(!empty($old_name))
        {
            file_put_contents($file,$old_name."\n",FILE_APPEND);
        }
    }
    print_r($names);
    return array_search( $name , $names );
}

NewName( "Sophie" );
NewName( "Toby" );
NewName( "Vincent" );
NewName( "Ulrich" );
?>