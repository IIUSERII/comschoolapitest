<?php
/**
 * Created by PhpStorm.
 * User: youssef
 * Date: 13/04/19
 * Time: 18:50
 */

namespace App\Library;


use Illuminate\Support\Facades\DB;

class QueryBuilder
{

    public static function buildSql($query){

        $query = explode('&&' , $query);

        $statement = "";

        $incr = 0;

        $queryAndCount = count($query);

        foreach ($query as $sql){

            if(count(explode('%7C%7C' , $sql)) > 1){

                $stat = explode('%7C%7C' , $sql);

                $i = 0;

                $queryOrCount = count($stat);

                foreach ($stat as $s){

                    $data = explode("=" , $s);

                    if($i == $queryOrCount - 1){

                        $statement .= " ".$data[0]." = ".$data[1];

                    }else{

                        $statement .= " ".$data[0]." = ".$data[1]. " OR ";

                    }

                    $i++;

                }

            }else{

                $data = explode("=" , $sql);

                if($incr == $queryAndCount - 1){

                    $statement .= " ".$data[0]." = ".$data[1];

                }else{

                    $statement .= " ".$data[0]." = ".$data[1]. " AND ";

                }

                $incr++;

            }

        }

        return $statement;


    }

    public static function OrBuild($sql){


    }

    public static function AndBuild($sql){



    }

}
