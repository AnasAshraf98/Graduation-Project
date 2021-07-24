<?php

    function similarityDistance($matrix,$person1,$person2){
        $similarity=array();
        $sum=0;

        foreach($matrix[$person1] as $key=>$value){
            if(array_key_exists($key,$matrix[$person2])){
                $similarity[$key]=1;
            }
        }

        if($similarity==0){
            return 0;
        }

        foreach($matrix[$person1] as $key=>$value){
            if(array_key_exists($key,$matrix[$person2])){
                $sum+=pow($value-$matrix[$person2][$key],2);
            }
        }

        return 1/(1+sqrt($sum));
    }    

    function getRecommendation($matrix,$person)
    {
        $total=array();
        $similaritySums=array();
        $ranks=array();

        foreach($matrix as $otherPerson=>$value){
            if($otherPerson!=$person){
                $similarity=similarityDistance($matrix,$person,$otherPerson);
                
                foreach($matrix[$otherPerson] as $key=>$value){
                    if(!array_key_exists($key,$matrix[$person])){
                        if(!array_key_exists($key,$total)){
                            $total[$key]=0;
                        }
                        
                        $total[$key]+=$matrix[$otherPerson][$key]*$similarity;

                        if(!array_key_exists($key,$similaritySums)){
                            $similaritySums[$key]=0;
                        }

                        $similaritySums[$key]+=$similarity;
                    }
                }
            }
        }

        foreach($total as $key=>$value){
            $ranks[$key]=$value/$similaritySums[$key];
        }

        array_multisort($ranks,SORT_DESC);

        return $ranks;
    }
?>