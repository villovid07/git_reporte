
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Reporte_Carne</title>
		<meta name="description" content="" />
		<meta name="author" content="villovid07" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" type="text/css"  href="estilo.css" />
	
	</head>

	<body>
		<div id="fondo"></div>
	<?php
			$cadenita= "SELECT hcp.peso_anterior, hcp.talla, hcp.fum, hcp.eg_conf_fum, hcp.eg_conf_ecografia," 
  			."hcp.movimientos_fetales_fecha, hcp.cigarrillos_dia, hcp.drogas, hcp.alcohol, hcp.vigencia_antitetanica, "
  			."hcp.primera_dosis_antitetanica, hcp.segunda_dosis_antitetanica, hcp.antirubeola, hcp.ex_odont, "
  			."hcp.ex_mamas, hcp.ex_cervix, hcp.bacteriuria, hcp.sensibilidad_rh, hcp.papanicolau, hcp.examen_vih_solicitado," 
        ."hcp.vdrl_rpr_menor, hcp.sifilis_conf_fta, hcp.vdrl_rpr_mayor, hcp.agshb, hcp.hb_menor, hcp.hb_mayor, "
  			."hcp.parto, hcp.fecha_ingreso, hcp.tiene_carne, hcp.consultas_prenatales, hcp.hospitalizacion_dias, " 			
        ."hcp.corticoides, hcp.semana_inicio_corticoides, hcp.inicio_parto, hcp.ruptura_anteparto, hcp.eg_ruptura, "
  			."hcp.tiempo_parto_dias, hcp.tiempo_parto_horas, hcp.eg_parto_semanas, hcp.eg_parto_dias, hcp.eg_parto_confiable, "
  			."hcp.presentacion_feto, hcp.enfe_ninguna, hcp.hta_previa, hcp.hta_inducida, hcp.preeclampsia, "
  			."hcp.eclampsia, hcp.cardio_nefropatia, hcp.diabetes, hcp.otra_grave, hcp.corio, hcp.infec_urinaria, "
  			."hcp.amenaza_parto_preter, hcp.rciu, hcp.rotura_prematura, hcp.hemorragia_1trim, hcp.hemorragia_2trim, "
  			."hcp.hemorragia_3trim, hcp.hemorragia_postparto, hcp.infeccion_puerperial, hcp.id_estado_nacimiento, "
        ."hcp.fecha_hora_parto, hcp.multiple_orden, hcp.multiple_fetos, hcp.forma_parto, hcp.indicacion_principal_de_induccion,"
			  ."hcp.acompanante, hcp.posicion_parto, hcp.episiotomia, hcp.id_ocitocitos, hcp.placenta_completa, " 			
        ."hcp.ligadura_cordon, hcp.medicacion_mgso4, hcp.medicacion_ocitocina, hcp.medicacion_antibiot, "
  			."hcp.medicacion_analgesia, hcp.medicacion_anestesia_reg, hcp.medicacion_anestesia_gral, "
        ."hcp.medicacion_transfusion, hcp.nro_gestacion, hcp.fuma_estado, hcp.citologia, hcp.colposcopia, "
  			."hcp.test_sullivan, hcp.nc_corticoides, hcp.ruptura_membranas_estado, hcp.fecha_ruptura, "
  			."hcp.semana_ruptura, hcp.temp_ruptura, hcp.horas_parto_ruptura, hcp.solo_enema, hcp.solo_rasurado, "
  			."hcp.enema_y_rasurado, hcp.desgarro_cond, hcp.placenta_retenida, hcp.partograma, hcp.medicacion_transfusion_derivados, "
        ."hcp.medicacion_transfusion_ninguno, hcp.preeclampsia_estado, hcp.anemia_enferemedad,hcp.vih_solicitado, "
  			."hcp.vih_consej, hcp.indicacion_operatoria, prn.horas_egreso_postparto, prn.vacunas_ninguna, "
  			."prn.vacunas_hepat, prn.vacunas_bcg, prn.vacunas_polio, prn.otras_pocisiones, prn.profilaxis_oft_rn, "
			  ."prn.vitaminak_rn, prn.sensibilidad_rh_rn, prn.rh_rn, prn.hemoclasificacion_rn, prn.nombre_responsable, "			
        ."prn.anticoncepcion_postparto, prn.numero_identificacion_rn, prn.antirubeola_postparto, prn.estado_egreso_materna, "
  			."prn.fecha_egreso_materna, prn.peso_al_egreso, prn.lactancia_rn, prn.edad_rn_dias, prn.estado_egreso_rn, "
  			."prn.fecha_egreso_rn, prn.notas_rn, prn.tamizaje_boca, prn.tamizaje_meconio, prn.tamizaje_bilir, prn.tamizaje_audicion, "
  			."prn.tamizaje_tsh, prn.tamizaje_vrdl, prn.enf3_desc, prn.enf2_desc, prn.enf1_desc, prn.enf3_cod, prn.enf2_cod, "
  			."prn.enf1_cod, prn.cod_defecto_congenito, prn.defectos_congenitos, prn.nombre_atendio_neonato, "
  			."prn.atendio_neonato, ap.gemelares, ap.emb_ectopico, ap.mola_antecedente, ap.fracaso_metodo_anticonceptivo, "
  			."ap.embarazo_planeado, ap.fin_embarazo_anterior, ap.muertos_despues_ginec, prn.atendio_parto, "
  			."prn.nombre_atendio_parto, prn.referido, prn.fallece_en_sala, prn.reanimacion, prn.apgar_5min, prn.apgar_1min, "
  			."prn.peso_eg, prn.eg_confiable_rn, prn.eg_dias_rn, prn.eg_semanas_rn, prn.longitud, prn.per_cefalico, "
        ."prn.sexo, prn.peso_rn, ap.muertos_1sem_ginec, ap.viven_ginec, ap.nacidos_muertos_ginec, ap.nacidos_vivos_ginec, "
  			."ap.cesareas_ginec, ap.vaginales_ginec, ap.partos_ginec, ap.abortos_ginec, ap.gestas_previas_ginec, "
  			."ap.tbc_familiar, ap.tbc_personal, ap.diabetes_familiar, ap.diabetes_personal, ap.hipertension_familiar, "
  			."ap.hipertension_personal, ap.pre_eclampsia_personal, ap.pre_eclampsia_familiar, ap.otros_familiar, "
  			."ap.otros_personal, ap.cirug_tracto_reproductiva, ap.infertilidad, ap.vih_antecedente, ap.cardio_nefropatia_ant, "
  			."ap.cond_medica_grave, ap.ultima_previo_ginec, afi.nivel_estudio, afi.alfabeta, afi.duracion_nivel, "
  			."afi.id_tipo_regimen, afi.id_etnia, (per.per_primer_nombre||' '||per.per_segundo_nombre||' '||per.per_primer_apellido||' '|| per.per_segundo_apellido) as nombre, "
  			."per.per_identificacion, per.per_direccion_residencia, per.per_telefono, per.per_fecha_nacimiento, "
  			."per.per_tipo_sangre, per.per_estado_civil"
			."FROM "
  			."ci_pyp.pyp_afiliado, ci_pyp.prenatal_recien_nacido prn, ci_pyp.historia_clinica_prenatal hcp, "
  			."ci_pyp.antecedentes_prenatal ap, "
  			."ci_fsss.afiliado afi, ci_general.persona per, ci_general.grupo_sanguineo san"
			."WHERE "
  			."pyp_afiliado.id_plan = hcp.id_plan AND hcp.id_plan = prn.id_plan AND "
  			." hcp.id_plan = ap.id_plan AND afi.id_afiliado = pyp_afiliado.id_afiliado AND afi.id_afiliado = per.per_id AND "
  			." per.per_tipo_sangre = san.id_sanguineo AND hcp.id_plan=11";
//-----------------------------------------------------------------------------------------------------------------------------------------------------

      $peso_anterior=888.88;
      $talla=888.88;
      $fum=date('Y-m-d');
      $eg_conf_fum='1';
      $eg_conf_eco='1';
      $movimientos_fetales_fecha='01/01/2013';
      $cigarrillos_dia=3;
      $drogas='1';
      $alcohol='1';
      $vig_antitetanica='1';
      $prim_anti=2;
      $seg_anti=8;
      $antirubeola='4';
      $ex_odont='1';
      $ex_mamas='1';
      $ex_cervix='1';
      $bacteriuria;
      $sensibilidad_rh='1';
      $papanicolau;
      $vih_solicitado;//no funca
      $vdrl_menor='1';
      $sifilis_fta='1';
      $vdrl_mayor='1';
      $agshb='3';
      $hb_menor=9.3;
      $hb_mayor=10.8;
      $parto='0';
      $fecha_ingreso=date('Y-m-d');
      $tiene_carne='1';
      $consultas_pre=2;
      $hosp_dias=2;
      $corticoides='3';
      $semana_inicio_cort=12;
      $inicio_parto='3';
      $ruptura_ante='1';// no sirve
      $eg_ruptura;
      $tiempo_parto_dias;
      $tiempo_parto_horas;
      $eg_parto_semanas=3;
      $eg_parto_dias=3;
      $eg_parto_confiable='1';
      $presentacion_feto='1';
      $enfe_ninguna='1';
      $htaprevia='1';
      $htainducida='1';
      $preeclampsia='1';
      $eclampsia='1';
      $cardio_nefropatia='1';
      $diabetes='1';
      $otragrave='1';
      $corio='1';
      $infec_urinaria='1';
      $amenaza_parto_preter='1';
      $rciu='1';
      $rotura_prematura='1';
      $h_1trim='1';
      $h_2trim='1';
      $h_3trim='1';
      $h_postparto='1';
      $infeccion_puerperial='1';
      $estado_nacimiento='1';
      $fecha_hora_parto=date("Y-m-d H:i:s");
      $multiple_orden='1';
      $multiple_fetos='2';
      $forma_parto='2';
      $induccion_cod='1234';
      $acompanante='1';
      $pocision_parto='1';
      $episiotomia='1';
      $ocitocitos='1';
      $placenta_completa='0';
      $ligadura_cordon='1';
      $mgso4='1';
      $ocitocina='1';
      $antibiot='1';
      $analgesia='1';
      $anestesia_reg='1';
      $anestesia_grl='1';
      $transfusion='1';// de sangre
      $nro_gestacion=12;
      $fuma_estado='3';
      $citologia='1';
      $colposcopia='1';
      $test_sullivan='3';
      $corticoides_nc='1';
      $ruptura_mem_estado='1';// este essssssssssssssssssssssss
      $fecha_ruptura=date("Y-m-d H:i:s");
      $semana_ruptura=30;
      $temp_ruptura=40.5;
      $horas_parto_ruptura=3;
      $soloenema='1';
      $solo_rasurado='1';
      $enema_rasurado='1';
      $desgarro_cond='1';
      $placenta_retenida='1';
      $partograma='0';
      $transfusion_otros='1';//derivados
      $transfusion_ninguno='1';
      $preeclampsia_estado;
      $anemia='1';
      $vih_solicitado2='1';
      $vih_aconsejado='1';
      $operatorio_cod='1234';
      $hrs_egreso_post;
      $vacunas_ninguna;
      $vacunas_hepat;
      $vacunas_bcg;
      $vacunas_polio;
      $otras_pocisiones;
      $profilaxis_oft_rn;
      $vitaminak;
      $sensibilidad_rh_rn;
      $rn_rh;
      $hemoclasificacion_rn;
      $nombre_responsable;
      $anticoncepcion_postparto;
      $numero_id_rn;
      $antirubeola_post;
      $estado_egreso_materna;
      $fecha_egreso_materna;
      $peso_al_egreso;
      $lactancia_rn;
      $edad_rn_dias;
      $estado_egreso_rn;
      $fecha_egreso_rn;
      $notas_rn;
      $tamizaje_boca;
      $tamizaje_meconio;
      $tamizaje_bilir;
      $tamizaje_audicion;
      $tamizaje_tsh;
      $tamizaje_vrdl;
      $enf3_desc;
      $enf2_desc;
      $enf1_desc;
      $enf3_cod;
      $enf2_cod;
      $enf1_cod;
      $cod_def_congenito;
      $def_congenitos;
      $nombre_atendio_neonato;
      $atendio_neonato;
      $gemelares;
      $emb_ectopico='1';
      $mola_antecedente='1';
      $fracaso_metodo='1';
      $embarazo_planeado='1';
      $fin_embarazo_anterior=date('Y-m-d');
      $atendio_parto='4';
      $nombre_atendio_parto='hernan david villota jojojojojo';
      $referido;
      $fallece_en_sala;
      $reanimacion;
      $apgar5min;
      $apgar1min;
      $pesoeg;
      $eg_confiable_rn;
      $eg_dias_rn;
      $eg_semanas_rn;
      $longitud;
      $per_cefalico;
      $sexo_rn='M';
      $peso_rn;

      $muertos_despues=12;
      $muertos_1sem=12;
      $viven=12;
      $nacidos_muertos=12;
      $nacidos_vivos=12;
      $cesareas=12;
      $vaginales=12;
      $partos_ginec=12;
      $abortos_ginec=12;
      $gestas_previas=12;

      $tbc_familiar='1';
      $tbc_personal='1';
      $diabetes_familiar='1';
      $diabetes_personal='4';
      $hta_familiar='1';
      $hta_personal='1';
      $preeclampsia_personal='1';
      $preeclampsia_familiar='1';
      $otros_familiar='1';
      $otros_personal='1';

      $cirug_tracto_rep='0';
      $infertilidad='1';
      $vih_antecedente='1';
      $cardio_nefro_ant='1';
      $cond_medica_grave='1';

      $ultima_previo='1';
      $nivel_estudio='1';
      $alfabeta='1';
      $duracion_nivel=6;
      $tipo_regimen='1';
      $id_etnia='4';
      $nombre_afi="Doris del Socorro Martinez Ricaurte";
      $identificacion_afi="1085274875";
      $direccion_residencia="Calle 123 #30-30 barrio falso";
      $telefono_afi="72020202";
      $fecha_nac_afi=date('Y-m-d');
      $tipo_sangre_afi='O+';
      $estado_civil_afi='2';      


      //----------------------------
      //fecha de nacimiento
      //--------------------------
      $dia_nacimiento=date("d", strtotime($fecha_nac_afi));
      $mes_nacimiento=date("m", strtotime($fecha_nac_afi));
      $ano_nacimiento=date("y", strtotime($fecha_nac_afi));  

      //-----------------------------
      //realizar calculo de la edad
      //-----------------------------
      

      $edad_afi=88;

      //------------------------------
      //FUM
      //------------------------------

      $dia_fum=date("d", strtotime($fum));
      $mes_fum=date("m", strtotime($fum));
      $ano_fum=date("y", strtotime($fum));

      //-------------------------------
      //FPP
      //-------------------------------
      if($fum != null)
      {
         
        $diasp=$dia_fum+7;
        $mesp=$mes_fum-3;
        $anop=$ano_fum;
        
        if($mesp <=0)
        {
          $mesp=12+$mesp;
        }
        else
        {
          $anop++;
        }
        
        if($diasp>30)
        {
          $diasp=$diasp-30;
          $mesp=$mesp+1;
        } 
      }

       //------------------------------
       // fin embarazo anterior
       //------------------------------

       $dia_fin=date("d", strtotime($fin_embarazo_anterior));
       $mes_fin=date("m", strtotime($fin_embarazo_anterior));
       $ano_fin=date("y", strtotime($fin_embarazo_anterior)); 

	?>
      <!--+++++++datos de cabecera++++++++++++++++++++++++++++++++++++++++++++++++-->

      <p id='nombreafi'><?php echo $nombre_afi; ?></p>
      <p id='dirafi'><?php echo $direccion_residencia; ?></p>
      <p id="ciuafi">Pasto</p>
      <p id="telafi"><?php echo $telefono_afi; ?></p>

      <p id="dia_nacimiento"><?php echo $dia_nacimiento ?></p>
      <p id="mes_nacimiento"><?php echo $mes_nacimiento ?></p>
      <p id="ano_nacimiento"><?php echo $ano_nacimiento ?></p>

      <p id="id_historia"><?php echo $identificacion_afi; ?></p>
      <p id="no_paciente"><?php echo $identificacion_afi; ?></p>

      <p id="dia_fpp_cab"><?php echo $diasp ?></p>
      <p id="mes_fpp_cab"><?php echo $mesp ?></p>
      <p id="ano_fpp_cab"><?php echo $anop ?></p>

      <p id="edad_afi"><?php echo $edad_afi ?></p>

      <p id="duracion_estudio"><?php echo $duracion_nivel ?></p>      
      

        

  <?php

    //tipo regimen afiliado
    if(!($tipo_regimen == '' || $tipo_regimen == null))
    {
      $xregimen;
      if($tipo_regimen=='1')//contributivo
      {
          $xregimen=870;
      }
      else if($tipo_regimen=='2')//subsidiado
      {
          $xregimen=901;
      }
      else if($tipo_regimen=='3')//V IN
      {
          $xregimen=930;
      }  
      else if($tipo_regimen=='4')//desplaz
      {
          $xregimen=972;//
      }
      else if($tipo_regimen=='5')//otro
      {
          $xregimen=1010;//
      }
      echo "<div class='equis' style='width: 15px;height: 15px;background-size: 15px 15px;position:absolute;left:".$xregimen."px;top:273px;'></div>";
    }

    //edad afiliado riesgo

    if($edad_afi < 15 || $edad_afi > 35)
    {
        echo "<div class='equis' style='width: 14px;height: 14px;background-size: 14px 14px;position:absolute;left:71.5px;top:316.5px;'></div>"; 
    }

    //etnia afiliado

    //etnia de donde se la coje de general o fsss!! esta es de fsss

    if(!($id_etnia == '' || $id_etnia == null))
    {
        $xetnia;
        if($id_etnia=='2')//blanca
        {
            $xetnia=178;
        }
        else if($id_etnia=='3')//negra
        {
            $xetnia=228;
        }
        else if($id_etnia=='1')//mestiza
        {
            $xetnia=276;
        }  
        else if($id_etnia=='4')//indigena
        {
            $xetnia=330;
        }
        else if($id_etnia=='5')//otra
        {
            $xetnia=377;
        }

        echo "<div class='equis' style='width: 15px;height: 15px;background-size: 15px 15px;position:absolute;left:".$xetnia."px;top:317px;'></div>"; 
     }

     //alfabeta afiliado
     // no se ha definido aun 

     if(!($alfabeta == '' || $alfabeta == null))
     {
        $xleer;
        if($alfabeta=='1')//si
        {
            $xleer=430;
        }
        else if($alfabeta=='0')//no
        {
            $xleer=470;//
        }
        echo "<div class='equis' style='width: 15px;height: 15px;background-size: 15px 15px;position:absolute;left:".$xleer."px;top:317px;'></div>"; 
     }

     //estudios_nivel
     // faltan llenar estos datos en la base

     if(!($nivel_estudio == '' || $nivel_estudio == null))
      {
          $xetnia;
          if($nivel_estudio=='1')//ninguno
          {
              $xetnia=540;
          }
          else if($nivel_estudio=='2')//primaria
          {
              $xetnia=600;//
          }
          else if($nivel_estudio=='3')//secundaria
          {
              $xetnia=670;//
          }  
          else if($nivel_estudio=='4')//universidad
          {
              $xetnia=745;//;
          }

          echo "<div class='equis' style='width: 15px;height: 15px;background-size: 15px 15px;position:absolute;left:".$xetnia."px;top:317px;'></div>"; 
       }

      //estado_civil
      if(!($estado_civil_afi == '' || $estado_civil_afi == null))
      {
          $x;
          if($estado_civil_afi=='2')//casada
          {
              $x=905;
          }
          else if($estado_civil_afi=='5')//union libre         
          {
              $x=975;
          }
          else if($estado_civil_afi=='1')//soltera
          {
              $x=1048;//
          }  
          else if($estado_civil_afi=='3' || $estado_civil_afi=='4')//otro
          {
              $x=1100;//
          }

          echo "<div class='equis' style='width: 15px;height: 15px;background-size: 15px 15px;position:absolute;left:".$x."px;top:317px;'></div>"; 
       }      

  ?>    

  <!-- antecedentes familiares y personales++++++++++++++++++++++++++++++++++++++++++++++-->

  <?php
      if(!($tbc_familiar== '' || $tbc_familiar== '3'))
      {
          $x;
          if($tbc_familiar=='1')//si
          {
              $x=60;
          }
          else if($tbc_familiar=='0')//no
          {
              $x=43;//
          }
           echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:391.3px;'></div>"; 

      }

      if(!($diabetes_familiar== '' || $diabetes_familiar== '3'))
      {
          $x;
          if($diabetes_familiar=='1')//si
          {
              $x=60;
          }
          else if($diabetes_familiar=='0')//no
          {
              $x=43;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:407px;'></div>";   

      }

      if(!($hta_familiar== '' || $hta_familiar== '3'))
      {
          $x;
          if($hta_familiar=='1')//si
          {
              $x=60;
          }
          else if($hta_familiar=='0')//no
          {
              $x=43;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:423.2px;'></div>";   
      }

      if(!($preeclampsia_familiar== '' || $preeclampsia_familiar== '3'))
      {
          $x;
          if($preeclampsia_familiar=='1')//si
          {
              $x=60;
          }
          else if($preeclampsia_familiar=='0')//no
          {
              $x=43;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:440px;'></div>";   

      }

      if(!($otros_familiar== '' || $otros_familiar== '3'))
      {
          $x;
          if($otros_familiar=='1')//si
          {
              $x=60;
          }
          else if($otros_familiar=='0')//no
          {
              $x=43;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:455px;'></div>";   

      }

      if(!($tbc_personal== '' || $tbc_personal== '3'))
      {
          $x;
          if($tbc_personal=='1')//si
          {
              $x=170;
          }
          else if($tbc_personal=='0')//no
          {
              $x=154;
          }
           echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:391.3px;'></div>"; 
      }    

      if(!($diabetes_personal== '' || $diabetes_personal== '0'))
      {
          $x;
          if($diabetes_personal=='2')//I
          {
              $x=170;
          }
          else if($diabetes_personal=='1')//no
          {
              $x=154;
          }
          else if($diabetes_personal=='3')//II
          {
              $x=188;//
          }

          else if($diabetes_personal=='4')//G
          {
              $x=203;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:407px;'></div>";   

      }

      if(!($hta_personal== '' || $hta_personal== '3'))
      {
          $x;
          if($hta_personal=='1')//si
          {
              $x=170;
          }
          else if($hta_personal=='0')//no
          {
              $x=154;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:423.2px;'></div>";   
      }

      if(!($preeclampsia_personal== '' || $preeclampsia_personal== '3'))
      {
          $x;
          if($preeclampsia_personal=='1')//si
          {
              $x=170;
          }
          else if($preeclampsia_personal=='0')//no
          {
              $x=154;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:440px;'></div>";   

      }

      if(!($otros_personal== '' || $otros_personal== '3'))
      {
          $x;
          if($otros_personal=='1')//si
          {
              $x=170;
          }
          else if($otros_personal=='0')//no
          {
              $x=154;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:455px;'></div>";   

      }   
  ?> 

  <!-- otros antecedentes++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  <?php

      if(!($cirug_tracto_rep== '' || $cirug_tracto_rep== '3'))
      {
          $x;
          if($cirug_tracto_rep=='1')//si
          {
              $x=351;
          }
          else if($cirug_tracto_rep=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:382px;'></div>";   
      }

      if(!($infertilidad== '' || $infertilidad== '3'))
      {
          $x;
          if($infertilidad=='1')//si
          {
              $x=351;
          }
          else if($infertilidad=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:396.5px;'></div>";   
      }

      if(!($vih_antecedente== '' || $vih_antecedente== '3'))
      {
          $x;
          if($vih_antecedente=='1')//si
          {
              $x=351;
          }
          else if($vih_antecedente=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:408.5px;'></div>";   
      }

      if(!($cardio_nefro_ant== '' || $cardio_nefro_ant== '3'))
      {
          $x;
          if($cardio_nefro_ant=='1')//si
          {
              $x=351;
          }
          else if($cardio_nefro_ant=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:422.5px;'></div>";   
      }


      if(!($cond_medica_grave== '' || $cond_medica_grave== '3'))
      {
          $x;
          if($cond_medica_grave=='1')//si
          {
              $x=351;
          }
          else if($cond_medica_grave=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:435px;'></div>";   
      }

      if(!($mola_antecedente== '' || $mola_antecedente== '3'))
      {
          $x;
          if($mola_antecedente=='1')//si
          {
              $x=351;
          }
          else if($mola_antecedente=='0')//no
          {
              $x=335;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:449px;'></div>";   
      }


      if(!($emb_ectopico== '' || $emb_ectopico== '3'))
      {
          $x;
          if($emb_ectopico=='1')//si
          {
              $x=351;
          }
          else if($emb_ectopico=='0')//no
          {
              $x=335;//
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:462px;'></div>";   
      }
  ?> 
  
      <!-- antecedentes ginecoobstetricos-->
  <?php    
      if($gestas_previas>0){
          echo "<p id='gestas_previas'>". $gestas_previas."</p>";
      }
      if($partos_ginec>0){
          echo "<p id='partos_ginec'>" .$partos_ginec."</p>";
      }
      if($abortos_ginec>0){
          echo "<p id='abortos_ginec'>".$abortos_ginec."</p>";
      }
      if($vaginales>0){
          echo "<p id='vaginales'>".$vaginales."</p>";
      }
      if($cesareas>0){
          echo "<p id='cesareas'>".$cesareas."</p>";
      }
      if($nacidos_vivos>0){
          echo "<p id='nacidos_vivos'>".$nacidos_vivos."</p>";
      }
      if($nacidos_muertos>0){
          echo "<p id='nacidos_muertos'>".$nacidos_muertos."</p>";
      }
      if($viven>0){
          echo "<p id='viven_ginec'>".$viven."</p>";
      }
      if($muertos_1sem>0){
          echo "<p id='muertos_1sem'>".$muertos_1sem."</p>";
      }
      if($muertos_despues>0){
          echo "<p id='muertos_despues'>".$muertos_despues."</p>";
      }
      
      if($fin_embarazo_anterior!= null)
      {
          echo "<p id='dia_fin'>".$dia_fin."</p>";
          echo "<p id='mes_fin'>".$mes_fin."</p>";
          echo "<p id='ano_fin'>".$ano_fin."</p>";
      }
  ?>    

  <?php
    if(!($ultima_previo== '' || $ultima_previo== '0'))
      {
          $y;
          if($ultima_previo=='1')//<2500
          {
              $y=311;//311
          }
          else if($ultima_previo=='2')//>4500
          {
              $y=322;
          }
          else if($ultima_previo=='3')//gemelares
          {
              $y=333;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:309.5px;top:".$y."px;'></div>";   
      }


      /**----------------------------------------
      * realizar el calculo de el fin del ultimo embarazo
      *------------------------------------------
      */

      $fin_ultimo_ano=6;//$fin_embarazo_anterior;  
      
      if($fin_ultimo_ano < 1 || $fin_ultimo_ano > 5)
      {
         echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:679.2px;top:277.5px;'></div>";       
      } 

      //--------------------------------------------------

      if(!($embarazo_planeado==' ' || $embarazo_planeado=='3'))
      {
        $x;
          if($embarazo_planeado=='1')//si
          {
              $x=730;
          }
          else if($embarazo_planeado=='0')//no
          {
              $x=753;
          }
          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:296px;'></div>";
      } 

      if(!($fracaso_metodo==' ' || $fracaso_metodo=='0'))
      {
        $x;
          if($fracaso_metodo=='1')//No usaba
          {
              $x=598.5;
          }
          else if($fracaso_metodo=='2')//Barrera
          {
              $x=624.2;
          }
          else if($fracaso_metodo=='3')//DIU
          {
              $x=650.5;
          }
          else if($fracaso_metodo=='4')//Hormonal
          {
              $x=676;
          }
          else if($fracaso_metodo=='5')//Emergencia
          {
              $x=701.5;
          }
          else if($fracaso_metodo=='6')//Natural
          {
              $x=726.7;
          }
          else if($fracaso_metodo=='7')//Ligadura
          {
              $x=753;
          }
          else if($fracaso_metodo=='8')//No aplica
          {
              $x=777.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:320.5px;'></div>";
      } 



?>

 
      <!--gestacion_actual-->

      <p id="peso_anterior"><?php echo $peso_anterior ?></p>
      <p id="talla"><?php echo $talla ?></p>
      <p id="no_gestacion"><?php echo $nro_gestacion ?></p>
      <p id="cigarrillos_dia"><?php echo $cigarrillos_dia ?></p>
      <p id="pri_dosis"><?php echo $prim_anti ?></p>
      <p id="seg_dosis"><?php echo $seg_anti ?></p>
      <p id="tipo_sangre"><?php echo $tipo_sangre_afi ?></p>
      <p id="hb_menor"><?php echo $hb_menor ?></p>
      <p id="hb_mayor"><?php echo $hb_mayor ?></p>

      <p id="dia_fum"><?php echo $dia_fum ?></p>
      <p id="mes_fum"><?php echo $mes_fum ?></p>
      <p id="ano_fum"><?php echo $ano_fum ?></p>

      <p id="dia_fpp"><?php echo $diasp ?></p>
      <p id="mes_fpp"><?php echo $mesp ?></p>
      <p id="ano_fpp"><?php echo $anop ?></p>


      <?php
            

            if(!($eg_conf_fum==' ' || $eg_conf_fum=='3'))
            {
                $x;
                if($eg_conf_fum=='1')//si
                {
                    $x=333.5;
                }
                else if($eg_conf_fum=='0')//no
                {
                    $x=346.2;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:379px;'></div>";
            } 

            if(!($eg_conf_eco==' ' || $eg_conf_eco=='3'))
            {
                $x;
                if($eg_conf_eco=='1')//si
                {
                    $x=333.5;
                }
                else if($eg_conf_eco=='0')//no
                {
                    $x=346.2;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:388.3px;'></div>";
            }
             
            //fuma
            
            if(!($fuma_estado==' ' || $fuma_estado=='0'))
            {
                $x;
                $y;
                if($fuma_estado=='1')//si
                {
                    $y=379;
                    $x=400;
                }
                else if($fuma_estado=='2')//no
                {
                    $y=379;
                    $x=388.5;
                }
                else if($fuma_estado=='3')//pasiva
                {
                    $y=388.3;
                    $x=394;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:".$y."px;'></div>";
            } 

            //drogas;
            //alcohol;

            if(!($drogas==' ' || $drogas=='3'))
            {
                $x;
                if($drogas=='1')//si
                {
                    $x=545;
                }
                else if($drogas=='0')//no
                {
                    $x=533;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:379px;'></div>";
            }

            if(!($alcohol==' ' || $alcohol=='3'))
            {
                $x;
                if($alcohol=='1')//si
                {
                    $x=500.5;
                }
                else if($alcohol=='0')//no
                {
                    $x=488.5;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:379px;'></div>";
            }

            //vigente_anti

            if(!($vig_antitetanica==' ' || $vig_antitetanica=='3'))
            {
                $x;
                if($vig_antitetanica=='1')//si
                {
                    $x=576;
                }
                else if($vig_antitetanica=='0')//no
                {
                    $x=588;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:388px;'></div>";
            }

            //$antirubeola

            if(!($antirubeola==' ' || $antirubeola=='0'))
            {
                $x;
                $y;
                if($antirubeola=='1')//previa
                {
                    $x=744.6;
                    $y=378.7;
                }
                else if($antirubeola=='2')//no sabe
                {
                    $x=756;
                    $y=378.7;
                }
                else if($antirubeola=='3')//embarazo
                {
                    $x=744.6;
                    $y=388;
                }
                else if($antirubeola=='4')//no
                {
                    $x=756;
                    $y=388;
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:".$y."px;'></div>";
            }

            //$ex_odont;
            //$ex_mamas;
            //$ex_cervix;  

            if(!($ex_odont==' ' || $ex_odont=='3'))
            {
                $x;
                if($ex_odont=='1')//si
                {
                    $x=52.7;
                }
                else if($ex_odont=='0')//no
                {
                    $x=64.6;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:411.5px;'></div>";
            }

            if(!($ex_mamas==' ' || $ex_mamas=='3'))
            {
                $x;
                if($ex_mamas=='1')//si
                {
                    $x=52.7;
                }
                else if($ex_mamas=='0')//no
                {
                    $x=64.6;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:420.5px;'></div>";
            }  

            if(!($ex_cervix==' ' || $ex_cervix=='3'))
            {
                $x;
                if($ex_cervix=='1')//si
                {
                    $x=52.7;
                }
                else if($ex_cervix=='0')//no
                {
                    $x=64.6;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:429.1px;'></div>";
            }    

            //$sensibilidad_rh;  
            if(!($sensibilidad_rh==' ' || $sensibilidad_rh=='3'))
            {
                $x;
                if($sensibilidad_rh=='1')//si
                {
                    $x=155;
                }
                else if($sensibilidad_rh=='0')//no
                {
                    $x=143.3;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:429.1px;'></div>";
            }  

            //$citologia;
            //$colposcopia; 
            if(!($citologia==' ' || $citologia=='0'))
            {
                $y;
                if($citologia=='1')//-
                {
                    $y=415.9;
                }
                else if($citologia=='2')//+
                {
                    $y=422.9;
                }
                else if($citologia=='3')//no sehizo
                {
                    $y=430.3;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:181px;top:".$y."px;'></div>";
            } 

            if(!($colposcopia==' ' || $colposcopia=='0'))
            {
                $y;
                if($colposcopia=='1')//-
                {
                    $y=415.9;
                }
                else if($colposcopia=='2')//+
                {
                    $y=422.9;//
                }
                else if($colposcopia=='3')//nose hizo
                {
                    $y=430.3;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:237px;top:".$y."px;'></div>";
            }   


            //$vih_solicitado2='1';
            //$vih_aconsejado='1';  
            if(!($vih_solicitado2==' ' || $vih_solicitado2=='3'))
            {
                $x;
                if($vih_solicitado2=='1')//si
                {
                    $x=327;

                }
                else if($vih_solicitado2=='0')//no
                {
                    $x=339.5;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:429.2px;'></div>";
            }  

            if(!($vih_aconsejado==' ' || $vih_aconsejado=='3'))
            {
                $x;
                if($vih_aconsejado=='1')//si
                {
                    $x=327;

                }
                else if($vih_aconsejado=='0')//no
                {
                    $x=339.5;//
                }
                echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:419.9px;'></div>";
            }  

            //$vdrl_menor;
            //$sifilis_fta;
            //$vdrl_mayor;
            
            if(!($vdrl_menor==' ' || $vdrl_menor=='0'))
            {
                $y;
                if($vdrl_menor=='1')//-
                {
                    $y=415.9;
                }
                else if($vdrl_menor=='2')//+
                {
                    $y=422.9;//
                }
                else if($vdrl_menor=='3')//nose hizo
                {
                    $y=430.3;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:357.5px;top:".$y."px;'></div>";
            }

            if(!($vdrl_mayor==' ' || $vdrl_mayor=='0'))
            {
                $y;
                if($vdrl_mayor=='1')//-
                {
                    $y=415.9;
                }
                else if($vdrl_mayor=='2')//+
                {
                    $y=422.9;//
                }
                else if($vdrl_mayor=='3')//nose hizo
                {
                    $y=430.3;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:402px;top:".$y."px;'></div>";
            }


            //aqui voy falta sifilis conf fta

            if(!($sifilis_fta==' '))
            {
                $y;
                if($sifilis_fta=='0')//n/c
                {
                    $y=417;
                }
                if($sifilis_fta=='1')//-
                {
                    $y=423.5;
                }
                else if($sifilis_fta=='2')//+
                {
                    $y=410;//
                }
                else if($sifilis_fta=='3')//nose hizo
                {
                    $y=430.2;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:452px;top:".$y."px;'></div>";
            }

            //hbs --$hb_menor=12.3;$hb_mayor=88.8;

            if($hb_menor<11 && hb>=0)
            {
             echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:552.3px;top:429.2px;'></div>"; 
            }

            if($hb_mayor<11 && hb>=0)
            {
             echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:602.5px;top:429.2px;'></div>"; 
            }

            //AGSHB aqui voy

            if(!($agshb==' ' || $agshb=='0'))
            {
                $y;
                if($agshb=='1')//-
                {
                    $y=415.9;
                }
                else if($agshb=='2')//+
                {
                    $y=422.9;//
                }
                else if($agshb=='3')//nose hizo
                {
                    $y=430.3;//
                }
                echo "<div class='equis' style='width: 7px;height: 7px;background-size: 7px 7px;position:absolute;left:653px;top:".$y."px;'></div>";
            }

            //$test_sullivan
            if(!($test_sullivan==' ' || $test_sullivan=='0'))
            {
                $y;
                $x;
                if($test_sullivan=='1')//<135
                {
                    $x=709;
                    $y=418.2;
                }
                else if($test_sullivan=='2')//>=200
                {
                    $x=751;
                    $y=418.2;
                }
                else if($test_sullivan=='3')//135-199
                {
                    $x=709;
                    $y=429;
                }
                else if($test_sullivan=='4')//no se hizo
                {
                    $x=751;    
                    $y=429;
                }
                echo "<div class='equis' style='width: 10px;height: 10px;background-size: 10px 10px;position:absolute;left:".$x."px;top:".$y."px;'></div>";
            }  


?>
<!-- INFORMACION PARTO+++++++++++++++++++++++++++++++++++++++++++--> 
<?php
            //$parto

            if(!($parto==' ' || $parto=='3'))
            {
                $y;
                if($parto=='1')//aborto
                {
                    $y=767.5;

                }
                else if($parto=='0')//parto
                {
                    $y=744.5;
                }
                echo "<div class='equis' style='width: 10px;height: 10px;background-size: 10px 10px;position:absolute;left:26.5px;top:".$y."px;'></div>";
            }

            //$tiene_carne

            if(!($tiene_carne==' ' || $tiene_carne=='3'))
            {
                $x;
                if($tiene_carne=='1')//aborto
                {
                    $x=99;//87;

                }
                else if($tiene_carne=='0')//parto
                {
                    $x=80;
                }
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:".$x."px;top:779.3px;'></div>";
            }

            //$fecha_ingreso
            if($fecha_ingreso != null)
            {
              $dia=date("d", strtotime($fecha_ingreso));
              $mes=date("m", strtotime($fecha_ingreso));
              $ano=date("y", strtotime($fecha_ingreso));

              echo "<p id='dia_ingreso'>".$dia."</p>";  
              echo "<p id='mes_ingreso'>".$mes. "</p>" ; 
              echo "<p id='ano_ingreso'>".$ano. "</p>" ; 
            }

            //$consultas_pre
            if($consultas_pre>0)
            {
              echo "<h1 id='consulta_prenatal'>".$consultas_pre."</h1>";  
            }

            //hosp dias
            if($hosp_dias>0)
            {
              echo "<p id='hospitalizacion_dias'>".$hosp_dias."</p>";  
            }

            //semana_inicio
            if($semana_inicio_cort>0)
            {
              echo "<p id='semana_corticoides'>".$semana_inicio_cort."</p>";  
            }

            //corticoides
            if(!($corticoides==' ' || $corticoides=='5'))
            {
                $x;
                $y;
                if($corticoides=='1')//completo
                {
                    $x=244;
                    $y=757.5;

                }
                else if($corticoides=='2')//multiples
                {
                    $x=244;
                    $y=773.2;
                }
                else if($corticoides=='3')//incompleto
                {
                    $x=289;
                    $y=757.5;
                }
                else if($corticoides=='4')//ninguna
                {
                    $x=289;
                    $y=773.2;
                }
                
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:".$x."px;top:".$y."px;'></div>";
            }

            //$corticoides_nc
            if($corticoides_nc=='1')//si
            {
                echo "<div class='equis' style='width: 10px;height: 10px;background-size: 10px 10px;position:absolute;left:344px;top:777px;'></div>";
            }

            //inicio_parto
            if(!($inicio_parto==' ' || $inicio_parto=='0'))
            {
                
                $y;
                if($inicio_parto=='1')//espontaneo
                {
                    
                    $y=757;

                }
                else if($inicio_parto=='2')//inducido
                {
                    
                    $y=767.6;
                }
                else if($inicio_parto=='3')//cesar elect.
                {
                    
                    $y=778;//
                }
                
                
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:377.5px;top:".$y."px;'></div>";
            }

            //$ruptura_mem_estado
            if(!($ruptura_mem_estado==' ' || $ruptura_mem_estado=='0'))
            {    
                $y;
                if($ruptura_mem_estado=='1')//integras
                {
      
                    $y=757;

                }
                else if($ruptura_mem_estado=='2')//rotas
                {
                    
                    $y=770.4;//
                }
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:437px;top:".$y."px;'></div>";

             }       

             //$semana_ruptura

             if($semana_ruptura>0)
             {

                echo "<p id='semana_rupt'>".$semana_ruptura."</p>";  
                if($semana_ruptura<37)
                {
                     echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:558.5px;top:755px;'></div>";                         
                }
             }

             //$temp_ruptura
             if($temp_ruptura>=38)
             {
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:558.5px;top:775.5px;'></div>";                         
             }  

             //$fecha_ruptura

             if($fecha_ruptura!= null)
             {
                 $dia=date("d", strtotime($fecha_ruptura));
                 $mes=date("m", strtotime($fecha_ruptura));
                 $ano=date("y", strtotime($fecha_ruptura));

                 //sacar hora y minuto como?

                 $hora=date("H", strtotime($fecha_ruptura));
                 $minute=date("i", strtotime($fecha_ruptura));

                 echo "<p id='dia_membrana'>".$dia."</p>";  
                 echo "<p id='mes_membrana'>".$mes. "</p>" ; 
                 echo "<p id='ano_membrana'>".$ano. "</p>" ;

                 echo "<p id='hora_membrana'>".$hora. "</p>" ;
                 echo "<p id='minute_membrana'>".$minute. "</p>";
             } 

             if($horas_parto_ruptura>0)
             {
                echo "<p id='horas_parto_ruptura'>".$horas_parto_ruptura. "</p>";
             }

             //$eg_parto_dias
             //$eg_parto_semanas

             if($eg_parto_semanas >0)
             {
                echo "<p id='eg_parto_semanas'>".$eg_parto_semanas. "</p>";
             } 

             if($eg_parto_dias >0)
             {
                echo "<p id='eg_parto_dias'>".$eg_parto_dias. "</p>";
             } 

             //$eg_parto_confiable

             if(!($eg_parto_confiable =='3' || $eg_parto_confiable =='4' || $eg_parto_confiable ==' '))
             {
                $x;
                if($eg_parto_confiable=='1')//por FUM
                {
                    $x=693.2;

                }
                else if($eg_parto_confiable=='2')//por ECO
                {   
                    $x=702.8;//
                }
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:".$x."px;top:779.5px;'></div>";

             }

             //presentacion
             if(!($presentacion_feto==' ' || $presentacion_feto=='0' || $presentacion_feto=='4'))
             {
                 $y;  
                 if($presentacion_feto=='1')//cefalica
                 {
                    $y=756.8;
                 } 

                 else if($presentacion_feto=='2')//pelviana
                 {
                    $y=768;
                 }

                 else if($presentacion_feto=='3')//transversa
                 {
                    $y=778.5;
                 }

                 echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:736.5px;top:".$y."px;'></div>";
             } 

             //$acompanante='1'
             if(!($acompanante==' ' || $acompanante=='4'))
             {
                 $y;  
                 if($acompanante=='1')//pareja
                 {
                    $y=810.7;
                 } 

                 else if($acompanante=='2')//familiar
                 {
                    $y=818.9;
                 }

                 else if($acompanante=='3')//otro
                 {
                    $y=826.9;
                 }

                 else if($acompanante=='0')//ninguno
                 {
                    $y=835.3;//
                 }

                 echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:28.7px;top:".$y."px;'></div>";
             } 

            //$estado_nacimiento='1';
            //$fecha_hora_parto=date("Y-m-d H:i:s");
            //$multiple_orden='1';
            //$multiple_fetos='2';

             if(!($estado_nacimiento==' ' || $estado_nacimiento=='0'))
             {
                $y;  
                if($estado_nacimiento=='1')//vivo
                {
                    $y=804.8;
                }
                else if($estado_nacimiento=='2')//muerto anteparto
                {
                    $y=814.8; 
                }
                else if($estado_nacimiento=='3')//muerto parto
                {
                    $y=824.7;
                }
                else if($estado_nacimiento=='4')//muerto ignora momento
                {
                    $y=835.4;//
                }

                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:105.8px;top:".$y."px;'></div>";
             }


             if($fecha_hora_parto!= null)
             {
                 $dia=date("d", strtotime($fecha_hora_parto));
                 $mes=date("m", strtotime($fecha_hora_parto));
                 $ano=date("y", strtotime($fecha_hora_parto));

                 //sacar hora y minuto como?

                 $hora=date("h", strtotime($fecha_hora_parto));
                 $minute=date("i", strtotime($fecha_hora_parto));

                 echo "<p id='dia_parto'>".$dia."</p>";  
                 echo "<p id='mes_parto'>".$mes. "</p>" ; 
                 echo "<p id='ano_parto'>".$ano. "</p>" ;

                 echo "<p id='hora_parto'>".$hora. "</p>" ;
                 echo "<p id='minute_parto'>".$minute. "</p>";
             } 

             if($multiple_orden>0)
             {
                  echo "<p id='multiple_orden'>".$multiple_orden. "</p>" ;
             }

             if($multiple_fetos>0)
             {
                  echo "<p id='multiple_fetos'>".$multiple_fetos. "</p>" ;
             }

             //$forma_parto
             if(!($forma_parto=='' || $forma_parto=='0' || $forma_parto=='5'))
             {
                $y;  
                if($forma_parto=='1')//espontanea
                {
                    $y=805.2;
                }
                else if($forma_parto=='2')//cesarea
                {
                    $y=824; 
                }
                else if($forma_parto=='3')//forceps
                {
                    $y=814.7;
                }
                else if($forma_parto=='4')//espatula
                {
                    $y=833.5;//
                }

                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:281.4px;top:".$y."px;'></div>";
             }
             //$induccion_cod
             //$operatorio_cod
      ?>
      
      <p id="induccion_cod"><?php echo $induccion_cod;?></p>
      <p id="operatorio_cod"><?php echo $operatorio_cod;?></p>
      
      <?php

        //$pocision_parto
             if(!($pocision_parto=='' || $pocision_parto=='0'))
             {
                $y;  
                if($pocision_parto=='1')//sentada
                {
                    $y=810.2;
                }
                else if($pocision_parto=='2')//acostada
                {
                    $y=829.2; 
                }
                else if($pocision_parto=='3')//cuclillas
                {
                    $y=819.7;
                }

                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:497.5px;top:".$y."px;'></div>";
             }
         //$episiotomia='1'
             if(!($episiotomia=='' || $episiotomia=='3'))
             {
                $y;  
                if($episiotomia=='1')//si
                {
                    $y=816.2;
                }
                else if($episiotomia=='0')//no
                {
                    $y=805.2;
                }

                echo "<div class='equis' style='width:10px;height:10px;background-size: 10px 10px;position:absolute;left:578px;top:".$y."px;'></div>";
             }

          //$soloenema='1';
          //$solo_rasurado='1';
          //$enema_rasurado='1';    
            if(!($soloenema=='' || $soloenema=='3'))
             {
                $x;  
                if($soloenema=='1')//si
                {
                    $x=651.5;
                }
                else if($soloenema=='0')//no
                {
                    $x=640;//
                }

                echo "<div class='equis' style='width:10px;height:10px;background-size: 10px 10px;position:absolute;left:".$x."px;top:805px;'></div>";
             }
             if(!($solo_rasurado=='' || $solo_rasurado=='3'))
             {
                $x;  
                if($solo_rasurado=='1')//si
                {
                    $x=651.5;
                }
                else if($solo_rasurado=='0')//no
                {
                    $x=640;//
                }

                echo "<div class='equis' style='width:10px;height:10px;background-size: 10px 10px;position:absolute;left:".$x."px;top:815.2px;'></div>";
             }
             if(!($enema_rasurado=='' || $enema_rasurado=='3'))
             {
                $x;  
                if($enema_rasurado=='1')//si
                {
                    $x=651.5;
                }
                else if($enema_rasurado=='0')//no
                {
                    $x=640;//
                }

                echo "<div class='equis' style='width:10px;height:10px;background-size: 10px 10px;position:absolute;left:".$x."px;top:823.8px;'></div>";
             }

             //$desgarro_cond

             if(!($desgarro_cond=='' || $desgarro_cond=='3'))
             {
                $x;  
                if($desgarro_cond=='1')//si
                {
                    $x=778;
                }
                else if($desgarro_cond=='0')//no
                {
                    $x=756;//
                }

                echo "<div class='equis' style='width:10px;height:10px;background-size: 10px 10px;position:absolute;left:".$x."px;top:807px;'></div>";
             }
                
             //$ocitocitos
             
             if (!($ocitocitos=='' || $ocitocitos=='0' ))
             {
                $y;
                if($ocitocitos=='1')//ocitocina
                {
                   $y=867; 
                }
                else if($ocitocitos=='2')//espontaneo
                {
                   $y=875.5; 
                }
                else if($ocitocitos=='3')//otro ocitocito
                {
                   $y=884; 
                }
                else if($ocitocitos=='4')//no
                {
                   $y=892; 
                }

                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:29.3px;top:".$y."px;'></div>";  
             }

             //$ligadura_cordon

             if (!($ligadura_cordon=='' || $ligadura_cordon=='0' ))
             {
                $y;
                if($ligadura_cordon=='1')//< 30
                {
                   $y=868.7; 
                }
                else if($ligadura_cordon=='2')//30s-1m
                {
                   $y=877.3;// 
                }
                else if($ligadura_cordon=='3')//> 1m
                {
                   $y=885.5;// 
                }
                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:97.9px;top:".$y."px;'></div>";  
             }

             //$placenta_completa
             //$placenta_retenida
             if(!($placenta_completa=='' || $placenta_completa=='3'))
             {
                $x;  
                if($placenta_completa=='1')//si
                {
                    $x=144;
                }
                else if($placenta_completa=='0')//no
                {
                    $x=156;
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:864.8px;'></div>";
             }

             if(!($placenta_retenida=='' || $placenta_retenida=='3'))
             {
                $x;  
                if($placenta_retenida=='1')//si
                {
                    $x=190.5;
                }
                else if($placenta_retenida=='0')//no
                {
                    $x=178.5;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:864.8px;'></div>";
             } 

             //$partograma='1'
             if(!($partograma=='' || $partograma=='3'))
             {
                $x;  
                if($partograma=='1')//si
                {
                    $x=144;
                }
                else if($partograma=='0')//no
                {
                    $x=156;
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:892.6px;'></div>";
             }

             //medicacion recibida
             //$ocitocina='1';
             if(!($ocitocina=='' || $ocitocina=='3'))
             {
                $x;  
                if($ocitocina=='1')//si
                {
                    $x=225;
                }
                else if($ocitocina=='0')//no
                {
                    $x=213;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:865px;'></div>";
             }               
             //$antibiot='1';
             if(!($antibiot=='' || $antibiot=='3'))
             {
                $x;  
                if($antibiot=='1')//si
                {
                    $x=225;
                }
                else if($antibiot=='0')//no
                {
                    $x=213;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:873px;'></div>";
             }
             //$analgesia='1';  analgesia epidural
             if(!($analgesia=='' || $analgesia=='3'))
             {
                $x;  
                if($analgesia=='1')//si
                {
                    $x=225;
                }
                else if($analgesia=='0')//no
                {
                    $x=213;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:881.2px;'></div>";
             }

             //$anestesia_reg 
             if(!($anestesia_reg=='' || $anestesia_reg=='3'))
             {
                $x;  
                if($anestesia_reg=='1')//si
                {
                    $x=225;
                }
                else if($anestesia_reg=='0')//no
                {
                    $x=213;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:889.5px;'></div>";
             }

             //$anestesia_grl='1';

             if(!($anestesia_grl=='' || $anestesia_grl=='3'))
             {
                $x;  
                if($anestesia_grl=='1')//si
                {
                    $x=314.5;
                }
                else if($anestesia_grl=='0')//no
                {
                    $x=302.5;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:851px;'></div>";
             }
             //$mgso4='1';
             
             if(!($mgso4=='' || $mgso4=='3'))
             {
                $x;  
                if($mgso4=='1')//si
                {
                    $x=314.5;
                }
                else if($mgso4=='0')//no
                {
                    $x=302.5;//
                }

                echo "<div class='equis' style='width:9px;height:9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:860px;'></div>";
             }
             
             //$transfusion='1';
             //$transfusion_otros='1';//derivados
             //$transfusion_ninguno='1';
             if($transfusion=='1')
             {
                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:303px;top:877.5px;'></div>";
             }
             if($transfusion_otros=='1')
             {
                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:303px;top:884.2px;'></div>";
             }
             if($transfusion_ninguno=='1')
             {
                echo "<div class='equis' style='width:8px;height:8px;background-size: 8px 8px;position:absolute;left:303px;top:891px;'></div>";
             }

              /*
              $htaprevia='1';
              $htainducida='1';
              $preeclampsia='1';
              $eclampsia='1';
              $cardio_nefropatia='1';
              $diabetes='1';
              $anemia='1';
              $enfe_ninguna='1';
              */

             if(!($htaprevia=='' || $htaprevia=='3'))
             {
                $x;  
                if($htaprevia=='1')//si
                {
                    $x=435;
                }
                else if($htaprevia=='0')//no
                {
                    $x=422;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:875px;'></div>";
             }

             if(!($htainducida=='' || $htainducida=='3'))
             {
                $x;  
                if($htainducida=='1')//si
                {
                    $x=435;
                }
                else if($htainducida=='0')//no
                {
                    $x=422;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:883px;'></div>";
             }

             if(!($preeclampsia=='' || $preeclampsia=='0'))
             {
                $x;  
                if($preeclampsia=='1')//No
                {
                    $x=409;
                }
                else if($preeclampsia=='2')//S
                {
                    $x=422;
                }
                else if($preeclampsia=='3')//M
                {
                    $x=435;
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:890.6px;'></div>";
             }

             if(!($eclampsia=='' || $eclampsia=='3'))
             {
                $x;  
                if($eclampsia=='1')//si
                {
                    $x=435;
                }
                else if($eclampsia=='0')//no
                {
                    $x=422;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:898px;'></div>";
             }

             if(!($cardio_nefropatia=='' || $cardio_nefropatia=='3'))
             {
                $x;  
                if($cardio_nefropatia=='1')//si
                {
                    $x=435;
                }
                else if($cardio_nefropatia=='0')//no
                {
                    $x=422;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:905.4px;'></div>";
             }

             if(!($anemia=='' || $anemia=='3'))
             {
                $x;  
                if($anemia=='1')//si
                {
                    $x=435;
                }
                else if($anemia=='0')//no
                {
                    $x=422;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:920.5px;'></div>";
             }

             if(!($diabetes=='' || $diabetes=='0'))
             {
                $x;  
                if($diabetes=='1')//no
                {
                    $x=396;
                }
                else if($diabetes=='2')//I
                {
                    $x=409;
                }
                else if($diabetes=='3')//II
                {
                    $x=422;
                }
                else if($diabetes=='2')//G
                {
                    $x=435;
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:913px;'></div>";
             }

             if($enfe_ninguna=='1')
             {
                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:435px;top:928.5px;'></div>";
             }
              /*
              $infec_urinaria='1';
              $amenaza_parto_preter='1';  
              $rciu='1';
              $rotura_prematura='1';
              $corio='1';
              $otragrave='1';
              */
             if(!($amenaza_parto_preter=='' || $amenaza_parto_preter=='3'))
             {
                $x;  
                if($amenaza_parto_preter=='1')//si
                {
                    $x=540;
                }
                else if($amenaza_parto_preter=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:883px;'></div>";
             }

             if(!($infec_urinaria=='' || $infec_urinaria=='3'))
             {
                $x;  
                if($infec_urinaria=='1')//si
                {
                    $x=540;
                }
                else if($infec_urinaria=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:875px;'></div>";
             }

             if(!($rciu=='' || $rciu=='3'))
             {
                $x;  
                if($rciu=='1')//si
                {
                    $x=540;
                }
                else if($rciu=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:890.6px;'></div>";
             }

             if(!($rotura_prematura=='' || $rotura_prematura=='3'))
             {
                $x;  
                if($rotura_prematura=='1')//si
                {
                    $x=540;
                }
                else if($rotura_prematura=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:898px;'></div>";
             }
              
             if(!($corio=='' || $corio=='3'))
             {
                $x;  
                if($corio=='1')//si
                {
                    $x=540;
                }
                else if($corio=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:905.4px;'></div>";
             }

             if(!($otragrave=='' || $otragrave=='3'))
             {
                $x;  
                if($otragrave=='1')//si
                {
                    $x=540;
                }
                else if($otragrave=='0')//no
                {
                    $x=527;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:913px;'></div>";
             } 
              
              
              /*
              $h_1trim='1';
              $h_2trim='1';
              $h_3trim='1';
              $h_postparto='1';
              $infeccion_puerperial='1';
              */
             if(!($h_1trim=='' || $h_1trim=='3'))
             {
                $x;  
                if($h_1trim=='1')//si
                {
                    $x=664;
                }
                else if($h_1trim=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:875.3px;'></div>";
             }              

             if(!($h_1trim=='' || $h_1trim=='3'))
             {
                $x;  
                if($h_1trim=='1')//si
                {
                    $x=664.3;
                }
                else if($h_1trim=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:875.3px;'></div>";
             }

             if(!($h_2trim=='' || $h_2trim=='3'))
             {
                $x;  
                if($h_2trim=='1')//si
                {
                    $x=664.3;
                }
                else if($h_2trim=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:884.2px;'></div>";
             }

             if(!($h_3trim=='' || $h_3trim=='3'))
             {
                $x;  
                if($h_3trim=='1')//si
                {
                    $x=664.3;
                }
                else if($h_3trim=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:893px;'></div>";
             }


             if(!($h_postparto=='' || $h_postparto=='3'))
             {
                $x;  
                if($h_postparto=='1')//si
                {
                    $x=664;
                }
                else if($h_postparto=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:902px;'></div>";
             }

             if(!($infeccion_puerperial=='' || $infeccion_puerperial=='3'))
             {
                $x;  
                if($infeccion_puerperial=='1')//si
                {
                    $x=664;
                }
                else if($infeccion_puerperial=='0')//no
                {
                    $x=627;//
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:910.5px;'></div>";
             }

             //$atendio_parto='1';
             //$nombre_atendio_parto='hernan david villota jojojojojo';
            
            if(!($atendio_parto=='' || $atendio_parto=='0'))
             {
                $x;  
                if($atendio_parto=='1')//medico
                {
                    $x=29.7;
                    $y=920.5;
                }
                else if($atendio_parto=='2')//enf
                {
                    $x=29.7;
                    $y=928.4;
                }
                else if($atendio_parto=='3')//aux
                {
                    $x=64.2;//
                    $y=920.5;
                }
                else if($atendio_parto=='4')//estud
                {
                    $x=64.2;//
                    $y=928.4;
                }
                else if($atendio_parto=='5')//empirico
                {
                    $x=95;//
                    $y=920.5;
                }
                else if($atendio_parto=='6')//otro
                {
                    $x=95;//
                    $y=928.4;
                }

                echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:".$x."px;top:".$y."px;'></div>";
             }
      ?>

      <p id="nombre_atendio_parto"><?php echo $nombre_atendio_parto  ?></p>

      <!-- RECIEN NACIDO ++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
      <?php
          //$sexo_rn='1'
          if(!($sexo_rn==' '))
          {
            $y;
            if($sexo_rn=='F')
            {
              $y=979;
            }
            else if($sexo_rn=='O')
            {
              $y=1007;//
            }

            else if($sexo_rn=='M')
            {
              $y=993;
            }
            echo "<div class='equis' style='width:7px;height:7px;background-size: 7px 7px;position:absolute;left:26px;top:".$y."px;'></div>";

          }
      ?>











      






	</body>
</html>