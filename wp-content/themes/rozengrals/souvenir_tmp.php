<?php
/*
Template Name: Souvenir
*/
?>
<?php get_header(); ?>
<div id="bg-mid">
    <div id="content">

        <div id="souvenirs">

            <div id="music-cd">
                <h3>“Medieval musicians Rozengrāls”</h3>
<!--                <div class="souvenirs-text-1">
                    В качестве музыкального сувенира, предлагаем CD диск средневековой музыки в исполении ансамбля
                    “Medieval musicians Rozengrāls”
                </div>-->
                <div class="souvenirs-content">

                    <div id="music-cd-left">
                        <div id="music-cd-text">
                            В качестве музыкального сувенира, предлагаем CD диск средневековой музыки в исполении ансамбля
                            “Medieval musicians Rozengrāls”
                        </div>
                        <a href="<?php echo get_bloginfo('template_directory'); ?>/images/rozen_cd_opti_512.png" rel="lightbox">
                            <img id="music-cd-cover" width="300" height="290" src="<?php echo get_bloginfo('template_directory'); ?>/images/rozen_cd_opti_512.png" class="attachment-thumbnail  img-rounded" alt="">
                        </a>
                    </div>

                    <div id="tracklist">
                        <table border="0" style="width:100%;">
                            <tr>
                                <td>1.</td>
                                <td>Quando el rev Nimrod</td>
                                <td>Spānija</td>
                                <td>trad.Setardu</td>
                                <td>4:01</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Los set gotxs</td>
                                <td>Spānija</td>
                                <td>Libre Vermell de Montserrat</td>
                                <td>3:56</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Trotto</td>
                                <td>Itālija</td>
                                <td>anon.</td>
                                <td>2:17</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Branle des Chaevaux</td>
                                <td>Francija</td>
                                <td>pēc Thoinot Arbeau</td>
                                <td>2:17</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Ai bist lo lop</td>
                                <td>Francija</td>
                                <td>trad. Provansiešu</td>
                                <td>2:29</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Cuncti simus concanentes</td>
                                <td>Spānija</td>
                                <td>Libre Vermell de Montserrat</td>
                                <td>2:12</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Amoroso</td>
                                <td>Itālija</td>
                                <td>Giovanni Ambrosio</td>
                                <td>2:55</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Eri sazun</td>
                                <td></td>
                                <td>pēc F. Wulit-Raben</td>
                                <td>1:51</td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Abrix mi galanica</td>
                                <td>Spānija</td>
                                <td>trad. Sefardu</td>
                                <td>3:26</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Ductia #2</td>
                                <td>Itālija</td>
                                <td>anon.</td>
                                <td>2:46</td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Saltarello #2</td>
                                <td>Itālija</td>
                                <td>anon.</td>
                                <td>2:31</td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Era escuro como la media noche</td>
                                <td>Spānija</td>
                                <td>trad. Sefardu</td>
                                <td>3:21</td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Nevestinko Oro</td>
                                <td>Maķedonija</td>
                                <td>trad.</td>
                                <td>3:46</td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Eves Bergelvem</td>
                                <td>Ungārija</td>
                                <td>trad.</td>
                                <td>3:47</td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Branle</td>
                                <td>Francija</td>
                                <td>pēc Kloda Žervēra</td>
                                <td>1:55</td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Durme querido hijico</td>
                                <td>Spānija</td>
                                <td>trad. Sefardu</td>
                                <td>3:57</td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Lillybulero</td>
                                <td>Īrija</td>
                                <td>trad.</td>
                                <td>3:12</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

            <div id="rozen-coins">
                <h3>Ремейк старинной медной монеты 1293</h3>
                <?php $upload_dir = wp_upload_dir(); ?>
                <?php /*echo $upload_dir['baseurl']; */?>
                <a href="<?php echo $upload_dir['baseurl']; ?>/2013/09/nauda_kolazha.jpg" rel="lightbox">
                    <img id="img-coins" width="200" height="190" src="<?php echo $upload_dir['baseurl']; ?>/2013/09/nauda_kolazha.jpg" class="attachment-thumbnail  img-rounded" alt="">
                </a>

                <div id="coins-text">
                    Во время раскопок винного погреба “Vinarium Civitatis Rigensis” была найдена старинная матрица для
                    чеканки монет. Она была реставрирована специалистами, и теперь мы можем предложить ремейк старинной
                    медной монеты 1293 года в память о посещении Риги и реcторана “Rozengrāls”.
                </div>

            </div>
<!--            <div class="souvenirs-content">

            </div>-->
        </div>

    </div>
</div>
<?php get_footer(); ?>
