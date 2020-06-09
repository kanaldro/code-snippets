                    if (false) {
                        $onnId = DB() -> get('onn_maping', ["URL LIKE '".$video['src'] . "'"]);  
                        
                        $embed_script=$embed_placeholder='';

                        if ($i==0) {
                            $embed_script.='<script>
                            document.write("<script src=\'https://video.onnetwork.tv/embed.php?sid='.$onnId[0]['ONN_SID_'.SITE()->get_id()].'&cId='.$onnId[0]['ONN_SID_'.SITE()->get_id()].'"+get_vast_master(ADOSLOTS)+"\' async><\/scr"+"ipt>");  
                            </script>';
                        } 
                            $embed_placeholder.='
                            
                            <div class="onnetworkplayerplaceholder">                            
                                <div class="play-container">
                                    <span class="icon icon-play"></span>
                                 </div>                          
                                <div class="description-container">
                                     <span class="title"> "Bravo, ai stil" </span>
                                    <span class="caption"> "Mesajul transmis de Raluca Badulescu pentru fanii emisiunii" </span>
                                </div>
                            </div>';
                        

                        $html = str_replace($video[0], '
                        <style>

                            .onnetworkembed {
                                padding-bottom:56.25%; margin-bottom:1rem; position:relative; background-size:cover;
                            }
                            .onnetworkembed::before{
                                position:absolute;
                                width:100%;
                                height:100%;
                                background:-webkit-linear-gradient(rgba(0,0,0, 0) 0%,rgba(0,0,0, 1) 100%); 
                                content: \'\';
                            }

                            .onnetworkembed:hover .icon {
                                opacity: 1!important;
                            }
                            .onnetworkplayerplaceholder {
                                position:absolute;
                                height:100%;
                                display:flex; flex-direction:row; justify-content:space-around; align-items:flex-end;position: absolute
                            }

                            .onnetworkplayerplaceholder .play-container {
                                width:50%; height:45%; display:flex 
                            }

                            .onnetworkplayerplaceholder .play-container .icon {
                                position: absolute; bottom: 3rem;left: 3rem; font-size:7.25rem; opacity: 0.6
                            }

                            .onnetworkplayerplaceholder .description-container{
                                height:60%; color:white; padding:1rem 0 0 1.5rem
                            }

                            .onnetworkplayerplaceholder .description-container .title {
                                font-size:3rem; display:block
                            }

                            .onnetworkplayerplaceholder .description-container .caption {
                                font-size:1.4rem;display:block; margin-top:1rem
                            }

                            </style>
                       
                        <div class="onnetworkembed" data-sid="'.$onnId[0]['ONN_SID_'.SITE()->get_id()].'" style="background-image: url(\'https://cdn.knd.ro/media/onnetwork.tv/poster/'.substr($onnId[0]['ONN_ID'], 0, 1).'/'.substr($onnId[0]['ONN_ID'], 1, 1).'/'.$onnId[0]['ONN_ID'].'_1.jpg?q=80\');" >
                        '.$embed_placeholder.'<div class="onn_player_container" id="'.$onnId[0]['ONN_SID_'.SITE()->get_id()].'" > </div>'.
                        $embed_script.'
                        </div>
                        ', $html);


                    }
                    else {
