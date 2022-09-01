<?php
                        $user_ip = getenv('REMOTE_ADDR');
                        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
                        $division = $geo["geoplugin_region"];
                        $dist = explode(" ", $division);
                        $district = $dist[0];
                        if ($district =="Dhaka" ){
                            $aqi = $getLatestDhakaSt;
                            $dashboard = $getLatestDhaka;
                        }
                        if ($district =="Rangpur" ){
                            $aqi = $getLatestRangpurSt;
                            $dashboard = $getLatestRangpur;
                        }
                        if ($district =="Chittagong" ){
                            $aqi = $getLatestChittagongSt;
                            $dashboard = $getLatestChittagong;
                        }
                        if ($district =="Barishal" ){
                            $aqi = $getLatestBarishalSt;
                            $dashboard = $getLatestBarishal;
                        }
                        if ($district =="Rajshahi" ){
                            $aqi = $getLatestRajshahiSt;
                            $dashboard = $getLatestRajshahi;
                        }
                        if ($district =="Khulna" ){
                            $aqi = $getLatestKhulnaSt;
                            $dashboard = $getLatestKhulna;
                        }
                        if ($district =="Sylhet" ){
                            $aqi = $getLatestSylhetSt;
                            $dashboard = $getLatestSylhet;
                        }
                        function checkAQI($aqir){
                            if ($aqir->aqi <=50){
                                echo "Good";
                            }
                            elseif($aqir->aqi <=100){
                                echo "Moderate";
                            }
                            elseif($aqir->aqi <=150){
                                echo "Unhealthy for Sensitive Groups";
                            }
                            elseif($aqir->aqi <=200){
                                echo "Unhealthy";
                            }
                            elseif($aqir->aqi <=250){
                                echo "Very Unhealthy";
                            }
                            elseif($aqir->aqi <=300){
                                echo "Hazardous";
                            }
                            } ?>