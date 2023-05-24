<?php

function NewName( string $name ) : int
{
    $file=fopen("names.txt","r+");
    $names=explode("\n",file_get_contents("names.txt"));
    // $names=file("names.txt");
    if(!in_array($name,$names))
    {
        $names[]=$name;
    }
    sort($names);
    ftruncate($file,0);
    foreach($names as $old_name)
    {
        if(!empty($old_name))
        {
            file_put_contents("names.txt",$old_name."\n",FILE_APPEND);
        }
    }
    fclose($file);
    print_r($names);
    return array_search( $name , $names );
}

NewName( "Sophie" );
NewName( "Toby" );
NewName( "Vincent" );
NewName( "Ulrich" );
?>