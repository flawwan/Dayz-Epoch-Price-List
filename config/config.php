<?php
define("VERSION","1.0");

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASS", "");

define("BASE", "http://" . $_SERVER['HTTP_HOST'] . '/epochpricelist/');

class config {
    public static $ALLOWED_DATABASES = array(
        'epoch',
        'namalsk',
    );

    public static $CURRENCIES = array(
        'ItemGoldBar10oz' => '10oz Gold',
        'ItemGoldBar' => 'Gold',
        'ItemSilverBar10oz' => '10oz Silver',
        'ItemBriefcase100oz' => 'Briefcase',
        'ItemSilverBar' => 'Silver'
    );
    public static $ALLOWED_IMAGES = array(
        '100Rnd_556x45_BetaCMag.png',
        '100Rnd_556x45_BetaCMag_airLock.png',
        '100Rnd_556x45_M249.png',
        '100Rnd_762x51_M240.png',
        '100Rnd_762x54_PK.png',
        '10Rnd_127x99_m107.png',
        '10Rnd_762x54_SVD.png',
        '10Rnd_9x39_SP5_VSS.png',
        '10Rnd_B_765x17_Ball.png',
        '10x_303.png',
        '15Rnd_9x19_M9.png',
        '15Rnd_9x19_M9SD.png',
        '15Rnd_W1866_Pellets.png',
        '15Rnd_W1866_Slug.png',
        '17Rnd_9x19_glock17.png',
        '1911.png',
        '1Rnd_HE_GP25.png',
        '1Rnd_HE_M203.png',
        '1Rnd_SMOKE_GP25.png',
        '1Rnd_SmokeGreen_GP25.png',
        '1Rnd_SmokeGreen_M203.png',
        '1Rnd_SmokeRed_GP25.png',
        '1Rnd_SmokeRed_M203.png',
        '1Rnd_SmokeYellow_GP25.png',
        '1Rnd_SmokeYellow_M203.png',
        '1Rnd_Smoke_M203.png',
        '200Rnd_556x45_L110A1.png',
        '200Rnd_556x45_M249.png',
        '200Rnd_762x51_M240.png',
        '20Rnd_556x45_Stanag.png',
        '20Rnd_762x51_B_SCAR.png',
        '20Rnd_762x51_DMR.png',
        '20Rnd_762x51_FNFAL.png',
        '20Rnd_762x51_SB_SCAR.png',
        '20Rnd_9x39_SP5_VSS.png',
        '20Rnd_B_765x17_Ball.png',
        '20Rnd_B_AA12_74Slug.png',
        '20Rnd_B_AA12_HE.png',
        '20Rnd_B_AA12_Pellets.png',
        '2Rnd_Igla.png',
        '2Rnd_shotgun_74Pellets.png',
        '2Rnd_shotgun_74Slug.png',
        '30Rnd_545x39_AK.png',
        '30Rnd_545x39_AKSD.png',
        '30Rnd_556x45_G36.png',
        '30Rnd_556x45_G36SD.png',
        '30Rnd_556x45_Stanag.png',
        '30Rnd_556x45_StanagSD.png',
        '30Rnd_762x39_AK47.png',
        '30Rnd_762x39_SA58.png',
        '30Rnd_9x19_MP5.png',
        '30Rnd_9x19_MP5SD.png',
        '30Rnd_9x19_UZI.png',
        '30Rnd_9x19_UZI_SD.png',
        '45ACP.png',
        '5Rnd_127x108_KSVK.png',
        '5Rnd_127x99_as50.png',
        '5Rnd_762x51_M24.png',
        '5Rnd_86x70_L115A1.png',
        '5x_22_LR_17_HMR.png',
        '60Rnd_762x54_DT.png',
        '64Rnd_9x19_Bizon.png',
        '64Rnd_9x19_SD_Bizon.png',
        '6Rnd_45ACP.png',
        '6Rnd_FlareGreen_M203.png',
        '6Rnd_FlareRed_M203.png',
        '6Rnd_FlareWhite_M203.png',
        '6Rnd_FlareYellow_M203.png',
        '6Rnd_HE_M203.png',
        '6Rnd_HE_M203_heli.png',
        '6Rnd_SmokeGreen_M203.png',
        '6Rnd_SmokeRed_M203.png',
        '6Rnd_SmokeYellow_M203.png',
        '6Rnd_Smoke_M203.png',
        '75Rnd_545x39_RPK.png',
        '7Rnd_45ACP_1911.png',
        '8Rnd_9x18_Makarov.png',
        '8Rnd_9x18_MakarovSD.png',
        '8Rnd_B_Beneli_74Slug.png',
        '8Rnd_B_Beneli_Pellets.png',
        '8Rnd_B_Saiga12_74Slug.png',
        '8Rnd_B_Saiga12_Pellets.png',
        'AA12_PMC.png',
        'AH6J_DZ.png',
        'AH6J_EP1.png',
        'AH6X_DZ.png',
        'AH6X_EP1.png',
        'AKS_74.png',
        'AKS_74_GOSHAWK.png',
        'AKS_74_NSPU.png',
        'AKS_74_U.png',
        'AKS_74_UN_kobra.png',
        'AKS_74_kobra.png',
        'AKS_74_pso.png',
        'AKS_GOLD.png',
        'AK_107_GL_kobra.png',
        'AK_107_GL_pso.png',
        'AK_107_kobra.png',
        'AK_107_pso.png',
        'AK_47_M.png',
        'AK_47_S.png',
        'AK_74.png',
        'AK_74_GL.png',
        'AK_74_GL_kobra.png',
        'AN2_DZ.png',
        'AT13.png',
        'ATV_CZ_EP1.png',
        'ATV_US_EP1.png',
        'An2_1_TK_CIV_EP1.png',
        'An2_TK_EP1.png',
        'ArmoredSUV_PMC.png',
        'ArmoredSUV_PMC_DZ.png',
        'BAF_AS50_TWS.png',
        'BAF_AS50_scoped.png',
        'BAF_L109A1_HE.png',
        'BAF_L110A1_Aim.png',
        'BAF_L7A2_GPMG.png',
        'BAF_L85A2_RIS_ACOG.png',
        'BAF_L85A2_RIS_CWS.png',
        'BAF_L85A2_RIS_Holo.png',
        'BAF_L85A2_RIS_SUSAT.png',
        'BAF_L85A2_UGL_ACOG.png',
        'BAF_L85A2_UGL_Holo.png',
        'BAF_L85A2_UGL_SUSAT.png',
        'BAF_L86A2_ACOG.png',
        'BAF_LRR_scoped.png',
        'BAF_LRR_scoped_W.png',
        'BAF_NLAW_Launcher.png',
        'BAF_Offroad_D.png',
        'BAF_Offroad_W.png',
        'BAF_ied_v1.png',
        'BAF_ied_v2.png',
        'BAF_ied_v3.png',
        'BAF_ied_v4.png',
        'BRDM2_ATGM_CDF.png',
        'BRDM2_ATGM_INS.png',
        'BRDM2_CDF.png',
        'BRDM2_INS.png',
        'BW_Ikarus1.png',
        'BW_Ikarus2.png',
        'Binocular.png',
        'Binocular_Vector.png',
        'BoltSteel.png',
        'Buggy_DZ.png',
        'C130J.png',
        'C130J_US_EP1.png',
        'CDF_dogtags.png',
        'CH47_DZ.png',
        'CH_47F_EP1.png',
        'CH_47F_EP1_DZ.png',
        'CSJ_GyroP.png',
        'CZ_VestPouch_EP1.png',
        'Cobalt_File.png',
        'Colt1911.png',
        'Crossbow.png',
        'Crossbow_DZ.png',
        'Crossbow_scope.png',
        'DMR.png',
        'DZ_ALICE_Pack_EP1.png',
        'DZ_Assault_Pack_EP1.png',
        'DZ_Backpack_EP1.png',
        'DZ_British_ACU.png',
        'DZ_CivilBackpack_EP1.png',
        'DZ_CompactPack_EP1.png',
        'DZ_Czech_Vest_Puch.png',
        'DZ_GunBag_EP1.png',
        'DZ_LargeGunBag_EP1.png',
        'DZ_Patrol_Pack_EP1.png',
        'DZ_TK_Assault_Pack_EP1.png',
        'Dragon_EP1.png',
        'EvDogTags.png',
        'EvKobalt.png',
        'EvMap.png',
        'EvMoney.png',
        'EvMoscow.png',
        'EvPhoto.png',
        'FN_FAL.png',
        'FN_FAL_ANPVS4.png',
        'Fishing_Boat.png',
        'FlareGreen_GP25.png',
        'FlareGreen_M203.png',
        'FlareRed_GP25.png',
        'FlareRed_M203.png',
        'FlareWhite_GP25.png',
        'FlareWhite_M203.png',
        'FlareYellow_GP25.png',
        'FlareYellow_M203.png',
        'FoodCanBadguy.png',
        'FoodCanBadguyEmpty.png',
        'FoodCanBakedBeans.png',
        'FoodCanBoneboy.png',
        'FoodCanBoneboyEmpty.png',
        'FoodCanCorn.png',
        'FoodCanCornEmpty.png',
        'FoodCanCurgon.png',
        'FoodCanCurgonEmpty.png',
        'FoodCanDemon.png',
        'FoodCanDemonEmpty.png',
        'FoodCanFraggleos.png',
        'FoodCanFraggleosEmpty.png',
        'FoodCanFrankBeans.png',
        'FoodCanGriff.png',
        'FoodCanGriffEmpty.png',
        'FoodCanHerpy.png',
        'FoodCanHerpyEmpty.png',
        'FoodCanOrlok.png',
        'FoodCanOrlokEmpty.png',
        'FoodCanPasta.png',
        'FoodCanPowell.png',
        'FoodCanPowellEmpty.png',
        'FoodCanSardines.png',
        'FoodCanTylers.png',
        'FoodCanTylersEmpty.png',
        'FoodCanUnlabeled.png',
        'FoodCanUnlabeledEmpty.png',
        'FoodMRE.png',
        'FoodNutmix.png',
        'FoodPistachio.png',
        'FoodSteakCooked.png',
        'FoodSteakRaw.png',
        'FoodbaconCooked.png',
        'FoodbaconRaw.png',
        'FoodbeefCooked.png',
        'FoodbeefRaw.png',
        'FoodchickenCooked.png',
        'FoodchickenRaw.png',
        'FoodmeatCooked.png',
        'FoodmeatRaw.png',
        'FoodmuttonCooked.png',
        'FoodmuttonRaw.png',
        'FoodrabbitCooked.png',
        'FoodrabbitRaw.png',
        'G36A_camo.png',
        'G36C.png',
        'G36C_camo.png',
        'G36K.png',
        'G36K_camo.png',
        'G36_C_SD_camo.png',
        'G36_C_SD_eotech.png',
        'G36a.png',
        'GAZ_Vodnik.png',
        'GAZ_Vodnik_MedEvac.png',
        'GLT_M300_LT.png',
        'GLT_M300_ST.png',
        'GNT_C185U.png',
        'Generator_DZ.png',
        'HMMWV.png',
        'HMMWV_Ambulance.png',
        'HMMWV_Ambulance_CZ_DES_EP1.png',
        'HMMWV_Ambulance_DES_EP1.png',
        'HMMWV_Ambulance_DZ.png',
        'HMMWV_Armored.png',
        'HMMWV_DES_EP1.png',
        'HMMWV_DZ.png',
        'HMMWV_M1035_DES_EP1.png',
        'HMMWV_M1151_M2_CZ_DES_EP1.png',
        'HMMWV_M1151_M2_DES_EP1.png',
        'HMMWV_M2.png',
        'HMMWV_M998A2_SOV_DES_EP1.png',
        'HandChemBlue.png',
        'HandChemGreen.png',
        'HandChemRed.png',
        'HandGrenade.png',
        'HandGrenade_East.png',
        'HandGrenade_Stone.png',
        'HandGrenade_West.png',
        'HandRoadFlare.png',
        'Hatchet_Swing.png',
        'IRStrobe.png',
        'IR_Strobe_Marker.png',
        'IR_Strobe_Target.png',
        'Igla.png',
        'Ikarus.png',
        'Ikarus_TK_CIV_EP1.png',
        'ItemAlumBar.png',
        'ItemAlumBar10oz.png',
        'ItemAntibiotic.png',
        'ItemBandage.png',
        'ItemBloodbag.png',
        'ItemBronzeBar.png',
        'ItemBurlap.png',
        'ItemCanvas.png',
        'ItemCompass.png',
        'ItemCopperBar.png',
        'ItemCopperBar10oz.png',
        'ItemCrowbar.png',
        'ItemEpinephrine.png',
        'ItemEtool.png',
        'ItemFishingPole.png',
        'ItemFlashlight.png',
        'ItemFlashlightRed.png',
        'ItemFuelBarrel.png',
        'ItemGPS.png',
        'ItemGenerator.png',
        'ItemGoldBar.png',
        'ItemGoldBar10oz.png',
        'ItemHatchet.png',
        'ItemHeatPack.png',
        'ItemJerrycan.png',
        'ItemJerrycanEmpty.png',
        'ItemKeyBlack.png',
        'ItemKeyBlue.png',
        'ItemKeyGreen.png',
        'ItemKeyMaker.png',
        'ItemKeyRed.png',
        'ItemKeyYellow.png',
        'ItemKnife.png',
        'ItemLightBulb.png',
        'ItemMachete.png',
        'ItemMap.png',
        'ItemMatchbox.png',
        'ItemMorphine.png',
        'ItemPainkiller.png',
        'ItemPole.png',
        'ItemRadio.png',
        'ItemRainBowTrout.png',
        'ItemSandbag.png',
        'ItemSeaBass.png',
        'ItemSeabassCooked.png',
        'ItemSilverBar.png',
        'ItemSilverBar10oz.png',
        'ItemSodaClays.png',
        'ItemSodaClaysEmpty.png',
        'ItemSodaCoke.png',
        'ItemSodaDrwaste.png',
        'ItemSodaDrwasteEmpty.png',
        'ItemSodaEmpty.png',
        'ItemSodaFranka.png',
        'ItemSodaFrankaEmpty.png',
        'ItemSodaLemonade.png',
        'ItemSodaLemonadeEmpty.png',
        'ItemSodaLirik.png',
        'ItemSodaLirikEmpty.png',
        'ItemSodaLvg.png',
        'ItemSodaLvgEmpty.png',
        'ItemSodaMdew.png',
        'ItemSodaMtngreen.png',
        'ItemSodaMtngreenEmpty.png',
        'ItemSodaMzly.png',
        'ItemSodaMzlyEmpty.png',
        'ItemSodaPeppsy.png',
        'ItemSodaPeppsyEmpty.png',
        'ItemSodaPepsi.png',
        'ItemSodaR4z0r.png',
        'ItemSodaR4z0rEmpty.png',
        'ItemSodaRabbit.png',
        'ItemSodaRabbitEmpty.png',
        'ItemSodaSacrite.png',
        'ItemSodaSacriteEmpty.png',
        'ItemSodaSmasht.png',
        'ItemSodaSmashtEmpty.png',
        'ItemTankTrap.png',
        'ItemTent.png',
        'ItemTentBag.png',
        'ItemTinBar.png',
        'ItemTinBar10oz.png',
        'ItemToolbox.png',
        'ItemTrashRazor.png',
        'ItemTrashToiletpaper.png',
        'ItemTrout.png',
        'ItemTroutCooked.png',
        'ItemTuna.png',
        'ItemTunaCooked.png',
        'ItemVault.png',
        'ItemWatch.png',
        'ItemWaterbottle.png',
        'ItemWaterbottleBoiled.png',
        'ItemWaterbottleUnfilled.png',
        'ItemWire.png',
        'Javelin.png',
        'Ka60_GL_NAC.png',
        'Kamaz.png',
        'KamazRefuel.png',
        'Kostey_map_case.png',
        'Kostey_notebook.png',
        'Kostey_photos.png',
        'L39_TK_EP1.png',
        'LEN_l119a1_acog.png',
        'LEN_l119a1_acog_cqb.png',
        'LEN_l119a1_acog_cqb_d.png',
        'LEN_l119a1_acog_cqb_sd.png',
        'LEN_l119a1_acog_cqb_sd_d.png',
        'LEN_l119a1_acog_cqb_sd_hg.png',
        'LEN_l119a1_acog_cqb_sd_hg_d.png',
        'LEN_l119a1_acog_cqb_sd_hg_w.png',
        'LEN_l119a1_acog_cqb_sd_w.png',
        'LEN_l119a1_acog_cqb_w.png',
        'LEN_l119a1_acog_d.png',
        'LEN_l119a1_acog_hg.png',
        'LEN_l119a1_acog_hg_d.png',
        'LEN_l119a1_acog_hg_w.png',
        'LEN_l119a1_acog_pf.png',
        'LEN_l119a1_acog_pf_d.png',
        'LEN_l119a1_acog_pf_sd.png',
        'LEN_l119a1_acog_pf_sd_d.png',
        'LEN_l119a1_acog_pf_sd_w.png',
        'LEN_l119a1_acog_pf_w.png',
        'LEN_l119a1_acog_ugl.png',
        'LEN_l119a1_acog_ugl_d.png',
        'LEN_l119a1_acog_ugl_pf.png',
        'LEN_l119a1_acog_ugl_pf_d.png',
        'LEN_l119a1_acog_ugl_pf_w.png',
        'LEN_l119a1_acog_ugl_w.png',
        'LEN_l119a1_acog_w.png',
        'LEN_l119a1_eot_cqb.png',
        'LEN_l119a1_eot_cqb_d.png',
        'LEN_l119a1_eot_cqb_sd.png',
        'LEN_l119a1_eot_cqb_sd_d.png',
        'LEN_l119a1_eot_cqb_sd_w.png',
        'LEN_l119a1_eot_cqb_w.png',
        'LEN_l119a1_eot_pf.png',
        'LEN_l119a1_eot_pf_d.png',
        'LEN_l119a1_eot_pf_sd.png',
        'LEN_l119a1_eot_pf_sd_d.png',
        'LEN_l119a1_eot_pf_sd_w.png',
        'LEN_l119a1_eot_pf_w.png',
        'LEN_l119a1_eot_ugl_pf.png',
        'LEN_l119a1_eot_ugl_pf_d.png',
        'LEN_l119a1_eot_ugl_pf_w.png',
        'Lada1.png',
        'Lada1_GDR.png',
        'Lada1_TK_CIV_EP1.png',
        'Lada2.png',
        'Lada2_GDR.png',
        'Lada2_TK_CIV_EP1.png',
        'Lada4_GDR.png',
        'Lada5_GDR.png',
        'LadaLM.png',
        'LandRover_CZ_EP1.png',
        'LandRover_MG_TK_EP1.png',
        'LandRover_Special_CZ_EP1.png',
        'LandRover_TK_CIV_EP1.png',
        'Laserbatteries.png',
        'Laserdesignator.png',
        'LeeEnfield.png',
        'M1014.png',
        'M1030.png',
        'M1030_US_DES_EP1.png',
        'M107.png',
        'M107_DZ.png',
        'M110_NVG_EP1.png',
        'M110_TWS_EP1.png',
        'M136.png',
        'M14_EP1.png',
        'M16A2.png',
        'M16A2GL.png',
        'M16A4_ACG_GL.png',
        'M16A4_GL.png',
        'M24.png',
        'M240.png',
        'M240_DZ.png',
        'M249.png',
        'M249_DZ.png',
        'M249_EP1.png',
        'M249_TWS_EP1.png',
        'M249_m145_EP1.png',
        'M24_des_EP1.png',
        'M32_EP1.png',
        'M40A3.png',
        'M47Launcher_EP1.png',
        'M4A1.png',
        'M4A1_AIM_SD_camo.png',
        'M4A1_Aim.png',
        'M4A1_Aim_camo.png',
        'M4A1_HWS_GL.png',
        'M4A1_HWS_GL_SD_Camo.png',
        'M4A1_HWS_GL_camo.png',
        'M4A1_RCO_GL.png',
        'M4A3_CCO_EP1.png',
        'M4A3_RCO_GL_EP1.png',
        'M4SPR.png',
        'M60A4_EP1.png',
        'M79_EP1.png',
        'M9.png',
        'M9SD.png',
        'MAAWS.png',
        'MAAWS_HEAT.png',
        'MAAWS_HEDP.png',
        'MG36.png',
        'MG36_camo.png',
        'MH6J_DZ.png',
        'MH6J_EP1.png',
        'MMT_Civ.png',
        'MP5A5.png',
        'MP5SD.png',
        'MR43.png',
        'MTVR.png',
        'MTVR_DES_EP1.png',
        'MV22.png',
        'MV22_DZ.png',
        'Machete_Swing.png',
        'Makarov.png',
        'MakarovSD.png',
        'MeeleFlashlightRed.png',
        'MeeleHatchet.png',
        'MeleeCrowbar.png',
        'MeleeFlashlight.png',
        'MeleeFlashlightRed.png',
        'MeleeHatchet.png',
        'MeleeMachete.png',
        'MetisLauncher.png',
        'Mi17_CDF.png',
        'Mi17_Civilian.png',
        'Mi17_Civilian_DZ.png',
        'Mi17_Civilian_Nam.png',
        'Mi17_DZ.png',
        'Mine.png',
        'MineE.png',
        'Mk13_EP1.png',
        'Mk_48.png',
        'Mk_48_DES_EP1.png',
        'Mk_48_DZ.png',
        'Moscow_Bombing_File.png',
        'MtvrRefuel_DES_EP1.png',
        'MtvrRefuel_DES_EP1_DZ.png',
        'NVGoggles.png',
        'OG7.png',
        'OG9_HE.png',
        'Offroad_DSHKM_Gue.png',
        'Old_bike_TK_CIV_EP1.png',
        'Old_bike_TK_INS_EP1.png',
        'Old_moto_TK_Civ_EP1.png',
        'Oring_Ikarus.png',
        'PBX.png',
        'PG7V.png',
        'PG7VL.png',
        'PG7VR.png',
        'PG9_AT.png',
        'PK.png',
        'PMC_AS50_TWS.png',
        'PMC_AS50_scoped.png',
        'PMC_documents.png',
        'PMC_ied_v1.png',
        'PMC_ied_v2.png',
        'PMC_ied_v3.png',
        'PMC_ied_v4.png',
        'PartEngine.png',
        'PartFueltank.png',
        'PartGeneric.png',
        'PartGlass.png',
        'PartVRotor.png',
        'PartWheel.png',
        'PartWoodLumber.png',
        'PartWoodPile.png',
        'PartWoodPlywood.png',
        'Pecheneg.png',
        'Pickup_PK_TK_GUE_EP1.png',
        'PipeBomb.png',
        'Post_bike_E.png',
        'RHIB.png',
        'RPG18.png',
        'RPG7V.png',
        'RPK_74.png',
        'Remington870_lamp.png',
        'S1203_TK_CIV_EP1.png',
        'S1203_ambulance_EP1.png',
        'SCAR_H_CQC_CCO.png',
        'SCAR_H_CQC_CCO_SD.png',
        'SCAR_H_LNG_Sniper.png',
        'SCAR_H_LNG_Sniper_SD.png',
        'SCAR_H_STD_EGLM_Spect.png',
        'SCAR_H_STD_TWS_SD.png',
        'SCAR_L_CQC.png',
        'SCAR_L_CQC_CCO_SD.png',
        'SCAR_L_CQC_EGLM_Holo.png',
        'SCAR_L_CQC_Holo.png',
        'SCAR_L_STD_EGLM_RCO.png',
        'SCAR_L_STD_EGLM_TWS.png',
        'SCAR_L_STD_HOLO.png',
        'SCAR_L_STD_Mk4CQT.png',
        'SMAW.png',
        'SMAW_HEAA.png',
        'SMAW_HEDP.png',
        'SUV_Blue.png',
        'SUV_Camo.png',
        'SUV_Charcoal.png',
        'SUV_Green.png',
        'SUV_Orange.png',
        'SUV_Pink.png',
        'SUV_Red.png',
        'SUV_Silver.png',
        'SUV_TK_CIV_EP1.png',
        'SUV_TK_EP1.png',
        'SUV_White.png',
        'SUV_Yellow.png',
        'SVD.png',
        'SVD_CAMO.png',
        'SVD_NSPU_EP1.png',
        'SVD_des_EP1.png',
        'Sa58P_EP1.png',
        'Sa58V_CCO_EP1.png',
        'Sa58V_EP1.png',
        'Sa58V_RCO_EP1.png',
        'Sa61_EP1.png',
        'Saiga12K.png',
        'SandNest_DZ.png',
        'Sandbag1_DZ.png',
        'Skin_Bandit1_DZ.png',
        'Skin_Bandit2_DZ.png',
        'Skin_BanditW1_DZ.png',
        'Skin_BanditW2_DZ.png',
        'Skin_CZ_Soldier_Sniper_EP1_DZ.png',
        'Skin_CZ_Special_Forces_GL_DES_EP1_DZ.png',
        'Skin_Camo1_DZ.png',
        'Skin_Drake_Light_DZ.png',
        'Skin_FR_OHara_DZ.png',
        'Skin_FR_Rodriguez_DZ.png',
        'Skin_Functionary1_EP1_DZ.png',
        'Skin_GUE_Commander_DZ.png',
        'Skin_GUE_Soldier_2_DZ.png',
        'Skin_GUE_Soldier_CO_DZ.png',
        'Skin_GUE_Soldier_Crew_DZ.png',
        'Skin_GUE_Soldier_Sniper_DZ.png',
        'Skin_Graves_Light_DZ.png',
        'Skin_Haris_Press_EP1_DZ.png',
        'Skin_Ins_Soldier_GL_DZ.png',
        'Skin_Pilot_EP1_DZ.png',
        'Skin_Priest_DZ.png',
        'Skin_RU_Policeman_DZ.png',
        'Skin_Rocker2_DZ.png',
        'Skin_Rocket_DZ.png',
        'Skin_Sniper1_DZ.png',
        'Skin_Soldier1_DZ.png',
        'Skin_Soldier_Bodyguard_AA12_PMC_DZ.png',
        'Skin_Soldier_Sniper_PMC_DZ.png',
        'Skin_Soldier_TL_PMC_DZ.png',
        'Skin_Survivor1_DZ.png',
        'Skin_Survivor2_DZ.png',
        'Skin_Survivor3_DZ.png',
        'Skin_SurvivorW2_DZ.png',
        'Skin_SurvivorWcombat_DZ.png',
        'Skin_SurvivorWdesert_DZ.png',
        'Skin_SurvivorWpink_DZ.png',
        'Skin_SurvivorWurban_DZ.png',
        'Skin_TK_INS_Soldier_EP1_DZ.png',
        'Skin_TK_INS_Warlord_EP1_DZ.png',
        'Skoda.png',
        'SkodaBlue.png',
        'SkodaGreen.png',
        'SkodaRed.png',
        'Smallboat_1.png',
        'Smallboat_2.png',
        'SmokeShell.png',
        'SmokeShellBlue.png',
        'SmokeShellGreen.png',
        'SmokeShellOrange.png',
        'SmokeShellPurple.png',
        'SmokeShellRed.png',
        'SmokeShellYellow.png',
        'Stinger.png',
        'Strela.png',
        'TT650_Civ.png',
        'TT650_Gue.png',
        'TT650_Ins.png',
        'TT650_TK_CIV_EP1.png',
        'TT650_TK_EP1.png',
        'Thumbs.db',
        'TrapBear.png',
        'TrashJackDaniels.png',
        'TrashTinCan.png',
        'UAZ_CDF.png',
        'UAZ_INS.png',
        'UAZ_MG_TK_EP1.png',
        'UAZ_RU.png',
        'UAZ_Unarmed_TK_CIV_EP1.png',
        'UAZ_Unarmed_TK_EP1.png',
        'UAZ_Unarmed_UN_EP1.png',
        'UH1H_DZ.png',
        'UZI_EP1.png',
        'UZI_SD_EP1.png',
        'Untitled-1.png',
        'UralCivil.png',
        'UralCivil2.png',
        'UralRefuel_INS.png',
        'UralRefuel_TK_EP1.png',
        'Ural_CDF.png',
        'Ural_INS.png',
        'Ural_TK_CIV_EP1.png',
        'Ural_UN_EP1.png',
        'V3S_Civ.png',
        'VIL_bmw7_civil2.png',
        'VIL_bmw7_civilvip.png',
        'VIL_vivaro_amb.png',
        'VSS_vintorez.png',
        'VWGolf.png',
        'VaultStorageLocked.png',
        'VolhaLimo_TK_CIV_EP1.png',
        'Volha_1_TK_CIV_EP1.png',
        'Volha_2_TK_CIV_EP1.png',
        'Winchester1866.png',
        'Wire_cat1.png',
        'WoodenArrow.png',
        'Zodiac.png',
        'bempty.png',
        'bizon.png',
        'bizon_silenced.png',
        'car_hatchback.png',
        'car_sedan.png',
        'cloth_parcel.png',
        'crowbar_swing.png',
        'datsun1_civil_1_open.png',
        'datsun1_civil_2_covered.png',
        'datsun1_civil_3_open.png',
        'equip_generator_ca.png',
        'equip_logs_CA.png',
        'equip_metal_CA.png',
        'fencewire_kit.png',
        'glock17_EP1.png',
        'hilux1_civil_1_open.png',
        'hilux1_civil_2_covered.png',
        'hilux1_civil_3_open.png',
        'hilux1_civil_3_open_EP1.png',
        'huntingrifle.png',
        'img',
        'inventar.png',
        'kpfs_golf_g.png',
        'kpfs_golf_p.png',
        'kpfs_golf_post.png',
        'kpfs_golf_tk.png',
        'ksvk.png',
        'logs.png',
        'm107_TWS_EP1.png',
        'm16a4.png',
        'm16a4_acg.png',
        'm240_scoped_EP1.png',
        'm8_SAW.png',
        'm8_carbine.png',
        'm8_carbineGL.png',
        'm8_carbine_pmc.png',
        'm8_compact.png',
        'm8_compact_pmc.png',
        'm8_holo_sd.png',
        'm8_sharpshooter.png',
        'm8_tws.png',
        'm8_tws_sd.png',
        'metal.png',
        'noimg.png',
        'pellets.png',
        'policecar.png',
        'remington870.png',
        'revolver_EP1.png',
        'revolver_gold_EP1.png',
        'tractor.png',
        'vempty.png',
    );
}