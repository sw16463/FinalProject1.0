<?php
$log = simplexml_load_file("XMLFile.xml");

/*echo $lists->list->entry[0]->name, "<br/>\n";
echo $lists->list->entry[0]->commit->author, "<br/>\n";

foreach($log->logentry as $logentry){
    if((string)$logentry->paths->path['kind'] == 'file'){
        if(strpos((string)$logentry->paths->path,'Assignment1.0') !== false){
            $logs = (string)$logentry->paths->path;
            $file = substr(strrchr($logs, "/"), 1);
            echo "$file <br/>\n";
        }   
    }
}*/
   $lists = simplexml_load_file("testing.xml");
    /*foreach($lists->list->entry as $entry){
        if((string)$entry['kind'] == 'file'){
            if(strpos((string)$entry->name,'org') == false){
                $files = (string)$entry->name;
                $file = substr(strrchr($files, "/"), 1);
                echo "$file <br/>\n";
            }   
        }
    }*/
                           /*foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment1.0') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "$file<br/>\n";
                                        echo "$entry->size<br/>\n";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "Test<br/>\n";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "Code<br/>\n";    
                                        }
                                        else{
                                            echo "Other<br/>\n";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path;
                                        echo "$path$files<br/>\n";
                                        $path = "/scwilli2/";
                                        echo "$path<br/>\n";
                                        $paths = "$path$files";
                                        echo "$paths<br/>\n";
                                        foreach($log->logentry as $logentry){
                                                
                                            foreach($logentry->paths->path as $path){
                                                #echo "$path<br/>\n";
                                                if(strcmp($paths, $path) == 0){
                                                    echo $logentry['revision'], "<br/>\n";
                                                    echo $logentry->author, "<br/>\n";
                                                    echo $logentry->date, "<br/>\n";
                                                    echo $logentry->msg, "<br/>\n";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }*//*
                            foreach($log->logentry as $logentry){
                                                
                                            foreach($logentry->paths->path as $path){
                                                #echo "$path<br/>\n";
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td>";
                                                }
                                            }
                                        }*/
                        
XML;
?>
