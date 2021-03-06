<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>August 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-08-31</h2>
					<p>
					Gerald Vanderick added Ark Area to the Mutant Night driver. Nicola sent in a driver for Golfing Greats, but it is missing the 3D layer generated by another pesky custom chip. Andrew Prime sent in a System 16 driver update with sound in endurob2, improved graphics in for example Outrun and Enduro Racer and did quite a few more bug fixes. Ernesto Corvi sent in a K053260 update with a lot better digital sound because the samples were just normal PCM after all.
					</p>
					<div class="wippix">
						<img src="wippics/9908/glfg_1.png" alt="Golfing Greats (c) 1991 Konami" width="288" height="224" />
						<img src="wippics/9908/glfg_2.png" alt="The intro of Golfing Greats" width="288" height="224" />
						<img src="wippics/9908/glfg_3.png" alt="The intro of Golfing Greats" width="288" height="224" />
						<img src="wippics/9908/glfg_4.png" alt="The gameplay of Golfing Greats" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-30</h2>
					<p>
					Tatsuyuki Satoh modified Namco System 1 drivers for the tilemap system, but the implementation is still a bit buggy. Nicola sent in a driver for Rollergames, which unfortunately isn't quite playable because the zoom layer graphics aren't fully working.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-29</h2>
					<p>
					Phil Stroffolino fixed Contra background palette bank, hooked up DACs properly in Samurai (Taito) and added the missing ROM. Ernesto Corvi finally added sprite-sprite collisions to Thunder Cross.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-28</h2>
					<p>
					Nicola fixed some Haunted Castle and Thunder Cross graphics problems with new PROMs and added sound to the mono-CPU Taito-L system games.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-27</h2>
					<p>
					Tatsuyuki Satoh added quite some new Namco System 1 games to the driver, but it is still extremely slow and buggy so don't expect anything. Brian Lewis fixed some arcade monitor bugs with ATI15KHz driver. Nicola sent in a driver for Detana!! Twin Bee.
					</p>
					<div class="wippix">
						<img src="wippics/9908/deta_1.png" alt="Detana!! Twin Bee (c) 1991 Konami" width="224" height="288" />
						<img src="wippics/9908/deta_2.png" alt="The intro of Detana!! Twin Bee" width="224" height="288" />
						<img src="wippics/9908/deta_3.png" alt="The gameplay of Detana!! Twin Bee" width="224" height="288" />
						<img src="wippics/9908/deta_4.png" alt="The gameplay of Detana!! Twin Bee" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-26</h2>
					<p>
					Olivier Galibert sent in a Taito system L driver with support for American Horseshoes, Cachat, Champion Wrestler, Fighting Hawk, Palamedes, Plotting, Puzznic and Raimais. None of them have sound though, and some have graphic bugs. Nicola sent in a misc. Konami update. Karl Stenerud fixed sbcd and abcd opcodes in the C 68k core.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-25</h2>
					<p>
					Manuel Abadia fixed an Aliens sound bug.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-24</h2>
					<p>
					Gerald Vanderick added Konami'88 to the '88 Games driver. Nicola sent in a driver for Bottom of the Ninth. Ernesto Corvi fixed a Konami CPU bug which affected Parodius' dancer level. Olivier Galibert sent in a preliminary Xexex driver with graphics and sprites missing.
					</p>
					<div class="wippix">
						<img src="wippics/9908/bott_1.png" alt="Bottom of the Ninth (c) 1989 Konami" width="288" height="224" />
						<img src="wippics/9908/bott_2.png" alt="The intro of Bottom of the Ninth" width="288" height="224" />
						<img src="wippics/9908/bott_3.png" alt="The gameplay of Bottom of the Ninth" width="288" height="224" />
						<img src="wippics/9908/bott_4.png" alt="The gameplay of Bottom of the Ninth" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-23</h2>
					<p>
					Ernesto Corvi sent in a K053260 update with misc. fixes and he also fixed Sunset Riders sprite-background collisions. Mike Coates fixed Donkey Kong sounds.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-22</h2>
					<p>
					Nicola fixed TMNT2 sound rom checksum test, Time Pilot graphics and Mysterious Stones colors (that's the game which has been broken for the longest time). Darren Olafson fixed an ASM 68k core bug which made kof98 timer incorrect.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-21</h2>
					<p>
					Andrea Mazzoleni fixed a bug in -listinfo and corrected the colors in Return of the Invaders. Nicola added Capcom Baseball to the Pang driver, and several Japanese Konami romsets.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-20</h2>
					<p>
					Nicola added Dokaben to the Pang driver. Jim Hernandez fixed System18 sound chip frequency.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-19</h2>
					<p>
					Mike Coates fixed a bug in S2650 which made Hunchback miscalculate things, and sent in a driver for Hunchback running on Donkey Kong hardware. Nicola added the 68705 image to Fairyland Story, and the attract mode and intro now work, but it hangs when a game is started.
					</p>
					<div class="wippix">
						<img src="wippics/9908/flst_1.png" alt="Fairyland Story (c) 1985 Taito" width="256" height="224" />
						<img src="wippics/9908/flst_2.png" alt="The attract mode of Fairyland Story" width="256" height="224" />
						<img src="wippics/9908/flst_3.png" alt="The intro of Fairyland Story" width="256" height="224" />
						<img src="wippics/9908/flst_4.png" alt="The attract mode of Fairyland Story" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-18</h2>
					<p>
					Phil Stroffolino sent in an update to the Samurai driver, with ADPCM sound and a lot of other fixes. Mike Coates sent in a Hunchback driver, which actually runs on the almighty Scramble hardware.
					</p>
					<div class="wippix">
						<img src="wippics/9908/hunc_1.png" alt="Hunchback (c) 1983 Centuri" width="224" height="256" />
						<img src="wippics/9908/hunc_2.png" alt="The intro of Hunchback" width="224" height="256" />
						<img src="wippics/9908/hunc_3.png" alt="The gameplay of Hunchback" width="224" height="256" />
						<img src="wippics/9908/hunc_4.png" alt="I'm flying.. downwards!" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-17</h2>
					<p>
					Jim Hernandez sent a new Super Contra driver with support for the correct romset. Aaron Giles fixed an embarrassing 68010/68020 mode selection bug. Ernesto Corvi added the sprite-background collision detection to Thunder Cross, but no sprite-sprite collisions yet. Bryan McPhail updated the Led Storm driver for the correct romset, and fixed the priority in the graphics driver. Nicola added the zooming/rotation layer to Ajax, making the graphics almost 100%.
					</p>
					<div class="wippix">
						<img src="wippics/9908/scon_1.png" alt="Super Contra (c) 1988 Konami" width="224" height="288" />
						<img src="wippics/9908/scon_2.png" alt="The intro of Super Contra" width="224" height="288" />
						<img src="wippics/9908/scon_3.png" alt="The intro of Super Contra" width="224" height="288" />
						<img src="wippics/9908/scon_4.png" alt="The gameplay of Super Contra" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/leds_1.png" alt="Led Storm (c) 1988 Capcom" width="240" height="384" />
						<img src="wippics/9908/leds_2.png" alt="The intro of Led Storm" width="240" height="384" />
						<img src="wippics/9908/leds_3.png" alt="The gameplay of Led Storm" width="240" height="384" />
						<img src="wippics/9908/leds_4.png" alt="The gameplay of Led Storm" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-16</h2>
					<p>
					Ernesto Corvi emulated the collision chip in Vendetta, and the game is now fully playable. Marco Cassili added another Japanese Strider romset. Andrew Prime sent in a nice System 16 update with Enduro Racer support and Outrun graphics problems fixed.
					</p>
					<div class="wippix">
						<img src="wippics/9908/endu_1.png" alt="Enduro Racer (c) 1987 Sega" width="320" height="224" />
						<img src="wippics/9908/endu_2.png" alt="I'm flying!" width="320" height="224" />
						<img src="wippics/9908/endu_3.png" alt="Scraping some dirt" width="320" height="224" />
						<img src="wippics/9908/endu_4.png" alt="Hiding behind the tree" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-15</h2>
					<p>
					Phil Stroffolino sent in an update to the Sprite Manager, with stretching support so that Simpsons might be possible to be converted to it. Nicola Salmoria sent in a fully working driver for Super Contra, but the romset is partial so there are a lot of bad graphics. Paul Leaman added some more non-working games to the Leland driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-14</h2>
					<p>
					Ernesto Corvi did a small bugfix update to UPD7759. Nicola fixed Legend of Makaj rom overflow bug, and a Western Express bug.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-13</h2>
					<p>
					Nicola Salmoria added '88 Games and a 68705 image to Mania Challenge, which is now working!
					</p>
					<div class="wippix">
						<img src="wippics/9908/mani_1.png" alt="Mania Challenge (c) 1986 Taito" width="240" height="256" />
						<img src="wippics/9908/mani_2.png" alt="The intro of Mania Challenge" width="240" height="256" />
						<img src="wippics/9908/mani_3.png" alt="The gameplay of Mania Challenge" width="240" height="256" />
						<img src="wippics/9908/mani_4.png" alt="Double KO?" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/88ga_1.png" alt="'88 Games (c) 1988 Konami" width="304" height="224" />
						<img src="wippics/9908/88ga_2.png" alt="The intro of '88 Games" width="304" height="224" />
						<img src="wippics/9908/88ga_3.png" alt="World record in 100 meters! Woohoo!" width="304" height="224" />
						<img src="wippics/9908/88ga_4.png" alt="Long jumping" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-12</h2>
					<p>
					Marco Cassili fixed some dipswitches in Marvin's Maze driver. Ernesto Corvi sent in another K053260 update with stereo channels in correct order, and fixed the sound in Crime Fighters. He also added more addressing modes to the Konami CPU. Phil Stroffolino added Yuke Yuke Yamaguchi-kun (not working) and Nunchackun to the Samurai driver, and fixed colors. Nicola fixed colors in Empire City 1931 / Street Fight. Phil Stroffolino fixed Marvin's Maze from crashing if sound is not enabled.
					</p>
					<div class="wippix">
						<img src="wippics/9908/empc_1.png" alt="Empire City: 1931 (c) 1986 Seibu Kaihatsu" width="256" height="224" />
						<img src="wippics/9908/empc_2.png" alt="The intro of Empire City: 1931" width="256" height="224" />
						<img src="wippics/9908/empc_3.png" alt="The gameplay of Empire City: 1931" width="256" height="224" />
						<img src="wippics/9908/empc_4.png" alt="Sorry, it was too dark to see anything" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/tsam_1.png" alt="Samurai (c) 1985 Taito" width="240" height="256" />
						<img src="wippics/9908/tsam_2.png" alt="The attract mode of Samurai" width="240" height="256" />
						<img src="wippics/9908/tsam_3.png" alt="The gameplay of Samurai" width="240" height="256" />
						<img src="wippics/9908/tsam_4.png" alt="The gameplay of Samurai" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/nunc_1.png" alt="Nunchackun (c) 1985 Taito" width="240" height="256" />
						<img src="wippics/9908/nunc_2.png" alt="The attract mode of Nunchackun" width="240" height="256" />
						<img src="wippics/9908/nunc_3.png" alt="The gameplay of Nunchackun" width="240" height="256" />
						<img src="wippics/9908/nunc_4.png" alt="The gameplay of Nunchackun" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-11</h2>
					<p>
					Nicola sent in a driver for Parodius, and added two new opcodes to the Konami CPU (needed for Parodius). Phil Stroffolino sent in a preliminary Samurai driver, which is missing sound and colors but otherwise playable. Bryan McPhail sent in an almost-working Thundercross driver, and Nicola went and fixed a CPU bug which prevented it from working. It still misses collision detection.
					</p>
					<div class="wippix">
						<img src="wippics/9908/thux_1.png" alt="Thunder Cross (c) 1988 Konami" width="288" height="224" />
						<img src="wippics/9908/thux_2.png" alt="The intro of Thunder Cross" width="288" height="224" />
						<img src="wippics/9908/thux_3.png" alt="The gameplay of Thunder Cross" width="288" height="224" />
						<img src="wippics/9908/thux_4.png" alt="The gameplay of Thunder Cross" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/paro_1.png" alt="Parodius (c) 1990 Konami" width="288" height="224" />
						<img src="wippics/9908/paro_2.png" alt="The intro of Parodius" width="288" height="224" />
						<img src="wippics/9908/paro_3.png" alt="The gameplay of Parodius" width="288" height="224" />
						<img src="wippics/9908/paro_4.png" alt="The gameplay of Parodius" width="288" height="224" />
						<img src="wippics/9908/paro_5.png" alt="The gameplay of Parodius" width="288" height="224" />
						<img src="wippics/9908/paro_6.png" alt="The gameplay of Parodius" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-10</h2>
					<p>
					Andrew Prime fixed Moonwalker sound in 8-bit mode. Nicola added Flash Gal and Air Wolf / Sky Wolf to the taitos84 driver. Nicola also sent in a Konami update with better EEPROM routines, fixed half priority sprites in Main Event and added sound to Devastators.
					</p>
					<div class="wippix">
						<img src="wippics/9908/airw_1.png" alt="Airwolf (c) 1987 Kyugo" width="288" height="224" />
						<img src="wippics/9908/airw_2.png" alt="The intro of Airwolf" width="288" height="224" />
						<img src="wippics/9908/airw_3.png" alt="Bombing the ground" width="288" height="224" />
						<img src="wippics/9908/airw_4.png" alt="That's impossible" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/flas_1.png" alt="Flash Gal (c) 1985 Sega" width="288" height="224" />
						<img src="wippics/9908/flas_2.png" alt="The gameplay of Flash Gal" width="288" height="224" />
						<img src="wippics/9908/flas_3.png" alt="The gameplay of Flash Gal" width="288" height="224" />
						<img src="wippics/9908/flas_4.png" alt="The gameplay of Flash Gal" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-09</h2>
					<p>
					Gerald Vanderick added Repulse and '99 The Last War to the Son of Phoenix driver. Ernesto Corvi sent in a K053260 update, with fixes to ADPCM decoding.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-08</h2>
					<p>
					Aaron Giles sent in a driver for Off the Wall. Jim Hernandez fixed Ajax / Crime Fighters sound speed. Mike Coates fixed PC fetch and stack in ASM 68k core. Valerio Verrando added a newer revision of the Circus Charlie roms. Gerald Vanderick added Empire City 1931 to the Street Fight driver.
					</p>
					<div class="wippix">
						<img src="wippics/9908/offt_1.png" alt="Off the Wall (c) 1991 Atari" width="336" height="240" />
						<img src="wippics/9908/offt_2.png" alt="The intro of Off the Wall" width="336" height="240" />
						<img src="wippics/9908/offt_3.png" alt="The intro of Off the Wall" width="336" height="240" />
						<img src="wippics/9908/offt_4.png" alt="The gameplay of Off the Wall" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-07</h2>
					<p>
					Roberto Fresca added highscore saving to Mahjong Gakuen. Andrew Prime added PCM sound to System 18 and 3D games (using Hiromitsu Shioya's PCM code) and also added transparent shadows.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-06</h2>
					<p>
					Hiromitsu Shioya sent a 007232 update, which sounds a lot better.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-05</h2>
					<p>
					Aaron Giles fixed APB controls and sprites.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-04</h2>
					<p>
					Roberto Fresca added highscore saving to Appoooh. Aaron Giles fixed a Relief Pitcher alternate romset sound problem. Brian Lewis fixed higher resolution tweaked modes from hanging.
					</p>
				</div>

				<div class="row">
					<h2>1999-08-03</h2>
					<p>
					Bryan McPhail sent in a 007232 update which adds bankswitching to the samples, necessary for Main Event. Andrew Prime sent in a huge System 16 driver update, with Hang-On graphics fixed and working drivers for Bay Route, Outrun, Space Harrier and Super Hang-On. Big thanks go out to Thierry Lescot and Nao for freeing S16AE sources. Aaron Giles fixed a bug in T11 opcodes and APB started working, but it has some sprite priority problems. Bryan McPhail added correct color PROMs to Darwin 4078.
					</p>
					<div class="wippix">
						<img src="wippics/9908/outr_1.png" alt="Out Run (c) 1986 Sega" width="320" height="224" />
						<img src="wippics/9908/outr_2.png" alt="The gameplay of Out Run" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/shar_1.png" alt="Space Harrier (c) 1985 Sega" width="320" height="224" />
						<img src="wippics/9908/shar_2.png" alt="The gameplay of Space Harrier" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-08-02</h2>
					<p>
					Roberto Fresca added highscore saving to Orca games. Nicola added the two missing PROMs to Cotocoto Cottong. Zsolt Vasvari added the MCU code to Sea Fighter Poseidon and the game works perfectly. Aaron Giles sent in another huge Atari update with another Hydra (prototype) set, Thunderjaws driver, Batman driver and Relief Pitcher driver.
					</p>
					<div class="wippix">
						<img src="wippics/9908/thun_1.png" alt="Thunderjaws (c) 1990 Atari" width="336" height="240" />
						<img src="wippics/9908/thun_2.png" alt="The intro of Thunderjaws" width="336" height="240" />
						<img src="wippics/9908/thun_3.png" alt="The intro of Thunderjaws" width="336" height="240" />
						<img src="wippics/9908/thun_4.png" alt="The gameplay of Thunderjaws" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/batm_1.png" alt="Batman (c) 1990 Atari" width="336" height="240" />
						<img src="wippics/9908/batm_2.png" alt="The intro of Batman" width="336" height="240" />
						<img src="wippics/9908/batm_3.png" alt="The gameplay of Batman" width="336" height="240" />
						<img src="wippics/9908/batm_4.png" alt="The gameplay of Batman" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9908/reli_1.png" alt="Relief Pitcher (c) 1992 Atari" width="336" height="240" />
						<img src="wippics/9908/reli_2.png" alt="The intro of Relief Pitcher" width="336" height="240" />
						<img src="wippics/9908/reli_3.png" alt="The gameplay of Relief Pitcher" width="336" height="240" />
						<img src="wippics/9908/reli_4.png" alt="The gameplay of Relief Pitcher" width="336" height="240" />
					</div>
				</div>

				<div class="rowlast">
					<h2>1999-08-01</h2>
					<p>
					John Butler modified Qix to draw straight to screen bitmap. Mirko Buffoni added test mode code to Bombjack Twin. Paul Leaman added some kind of sound to the Qsound games, but frequency and length of the samples aren't yet right.
					</p>
				</div>

            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->
	<br/><br/><br/>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
</body>

</html>
