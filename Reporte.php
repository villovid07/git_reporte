
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
      $ruptura_ante='1';
      $eg_ruptura;
      $tiempo_parto_dias;
      $tiempo_parto_horas;
      $eg_parto_semanas;
      $eg_parto_dias;
      $eg_parto_confiable;
      $presentacion_feto;
      $enfe_ninguna;
      $htaprevia;
      $htainducida;
      $preeclampsia;
      $eclampsia;
      $cardio_nefropatia;
      $diabetes;
      $otragrave;
      $corio;
      $infec_urinaria;
      $amenaza_parto_preter;
      $rciu;
      $rotura_prematura;
      $h_1trim;
      $h_2trim;
      $h_3trim;
      $h_postparto;
      $infeccion_puerperial;
      $estado_nacimiento;
      $fecha_hora_parto;
      $multiple_orden;
      $multiple_fetos;
      $forma_parto;
      $induccion_cod;
      $acompanante;
      $pocision_parto;
      $episiotomia;
      $ocitocitos;
      $placenta_completa;
      $ligadura_cordon;
      $mgso4;
      $ocitocina;
      $antibiot;
      $analgesia;
      $anestesia_reg;
      $anestesia_grl;
      $transfusion;
      $nro_gestacion=12;
      $fuma_estado='3';
      $citologia='1';
      $colposcopia='1';
      $test_sullivan='3';
      $corticoides_nc='1';
      $ruptura_mem_estado;
      $fecha_ruptura;
      $semana_ruptura;
      $temp_ruptura;
      $horas_parto_ruptura;
      $soloenema;
      $solo_rasurado;
      $enema_rasurado;
      $desgarro_cond;
      $placenta_retenida;
      $partograma;
      $transfusion_otros;
      $transfusion_ninguno;
      $preeclampsia_estado;
      $anemia;
      $vih_solicitado2='1';
      $vih_aconsejado='1';
      $operatorio_cod;
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
      $atendio_parto;
      $nombre_atendio_parto;
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
      $sexo_rn;
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
      $nivel_estudio='4';
      $alfabeta='2';
      $duracion_nivel=6;
      $tipo_regimen='2';
      $id_etnia='5';
      $nombre_afi="Doris del Socorro Martinez Ricaurte";
      $identificacion_afi="1085274875";
      $direccion_residencia="Calle 123 #30-30 barrio falso";
      $telefono_afi="72020202";
      $fecha_nac_afi=date('Y-m-d');
      $tipo_sangre_afi='O+';
      $estado_civil_afi='4';      


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
          $xregimen=612;
      }
      else if($tipo_regimen=='2')//subsidiado
      {
          $xregimen=634;
      }
      else if($tipo_regimen=='3')//V IN
      {
          $xregimen=656;
      }  
      else if($tipo_regimen=='4')//desplaz
      {
          $xregimen=684;
      }
      else if($tipo_regimen=='5')//otro
      {
          $xregimen=711;
      }
      echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$xregimen."px;top:195px;'></div>";
    }

    //edad afiliado riesgo

    if($edad_afi < 15 || $edad_afi > 35)
    {
        echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:52px;top:225px;'></div>"; 
    }

    //etnia afiliado

    //etnia de donde se la coje de general o fsss!! esta es de fsss

    if(!($id_etnia == '' || $id_etnia == null))
    {
        $xetnia;
        if($id_etnia=='2')//blanca
        {
            $xetnia=128;
        }
        else if($id_etnia=='3')//negra
        {
            $xetnia=162;
        }
        else if($id_etnia=='1')//mestiza
        {
            $xetnia=196;
        }  
        else if($id_etnia=='4')//indigena
        {
            $xetnia=234;
        }
        else if($id_etnia=='5')//otra
        {
            $xetnia=267;
        }

        echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$xetnia."px;top:226px;'></div>"; 
     }

     //alfabeta afiliado
     // no se ha definido aun 

     if(!($alfabeta == '' || $alfabeta == null))
     {
        $xleer;
        if($alfabeta=='1')//si
        {
            $xleer=302;
        }
        else if($alfabeta=='2')//no
        {
            $xleer=333;
        }
        echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$xleer."px;top:226px;'></div>"; 
     }

     //estudios_nivel
     // faltan llenar estos datos en la base

     if(!($nivel_estudio == '' || $nivel_estudio == null))
      {
          $xetnia;
          if($nivel_estudio=='1')//ninguno
          {
              $xetnia=380;
          }
          else if($nivel_estudio=='2')//primaria
          {
              $xetnia=425;
          }
          else if($nivel_estudio=='3')//secundaria
          {
              $xetnia=470;
          }  
          else if($nivel_estudio=='4')//universidad
          {
              $xetnia=525;
          }

          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$xetnia."px;top:226px;'></div>"; 
       }

      //estado_civil
      if(!($estado_civil_afi == '' || $estado_civil_afi == null))
      {
          $x;
          if($estado_civil_afi=='2')//casada
          {
              $x=638;
          }
          else if($estado_civil_afi=='5')//union libre         
          {
              $x=687;
          }
          else if($estado_civil_afi=='1')//soltera
          {
              $x=738;
          }  
          else if($estado_civil_afi=='3' || $estado_civil_afi=='4')//otro
          {
              $x=775;
          }

          echo "<div class='equis' style='width: 12px;height: 12px;background-size: 12px 12px;position:absolute;left:".$x."px;top:226px;'></div>"; 
       }      

  ?>    

  <!-- antecedentes familiares y personales++++++++++++++++++++++++++++++++++++++++++++++-->

  <?php
      if(!($tbc_familiar== '' || $tbc_familiar== '3'))
      {
          $x;
          if($tbc_familiar=='1')//si
          {
              $x=44;
          }
          else if($tbc_familiar=='0')//no
          {
              $x=32.5;
          }
           echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:278.4px;'></div>"; 

      }

      if(!($diabetes_familiar== '' || $diabetes_familiar== '3'))
      {
          $x;
          if($diabetes_familiar=='1')//si
          {
              $x=44;
          }
          else if($diabetes_familiar=='0')//no
          {
              $x=32.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:289.7px;'></div>";   

      }

      if(!($hta_familiar== '' || $hta_familiar== '3'))
      {
          $x;
          if($hta_familiar=='1')//si
          {
              $x=44;
          }
          else if($hta_familiar=='0')//no
          {
              $x=32.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:301px;'></div>";   
      }

      if(!($preeclampsia_familiar== '' || $preeclampsia_familiar== '3'))
      {
          $x;
          if($preeclampsia_familiar=='1')//si
          {
              $x=44;
          }
          else if($preeclampsia_familiar=='0')//no
          {
              $x=32.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:313px;'></div>";   

      }

      if(!($otros_familiar== '' || $otros_familiar== '3'))
      {
          $x;
          if($otros_familiar=='1')//si
          {
              $x=44;
          }
          else if($otros_familiar=='0')//no
          {
              $x=32.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:323.5px;'></div>";   

      }

      if(!($tbc_personal== '' || $tbc_personal== '3'))
      {
          $x;
          if($tbc_personal=='1')//si
          {
              $x=121.5;
          }
          else if($tbc_personal=='0')//no
          {
              $x=110;
          }
           echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:278.4px;'></div>"; 
      }    

      if(!($diabetes_personal== '' || $diabetes_personal== '0'))
      {
          $x;
          if($diabetes_personal=='2')//I
          {
              $x=121.5;
          }
          else if($diabetes_personal=='1')//no
          {
              $x=110;
          }
          else if($diabetes_personal=='3')//II
          {
              $x=133.5;
          }

          else if($diabetes_personal=='4')//G
          {
              $x=145;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:289.7px;'></div>";   

      }

      if(!($hta_personal== '' || $hta_personal== '3'))
      {
          $x;
          if($hta_personal=='1')//si
          {
              $x=121.5;
          }
          else if($hta_personal=='0')//no
          {
              $x=110;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:301px;'></div>";   
      }

      if(!($preeclampsia_personal== '' || $preeclampsia_personal== '3'))
      {
          $x;
          if($preeclampsia_personal=='1')//si
          {
              $x=121.5;
          }
          else if($preeclampsia_personal=='0')//no
          {
              $x=1110;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:313px;'></div>";   

      }

      if(!($otros_personal== '' || $otros_personal== '3'))
      {
          $x;
          if($otros_personal=='1')//si
          {
              $x=121.5;
          }
          else if($otros_personal=='0')//no
          {
              $x=110;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:323.5px;'></div>";   

      }   
  ?> 

  <!-- otros antecedentes++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  <?php

      if(!($cirug_tracto_rep== '' || $cirug_tracto_rep== '3'))
      {
          $x;
          if($cirug_tracto_rep=='1')//si
          {
              $x=249;
          }
          else if($cirug_tracto_rep=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:272px;'></div>";   
      }

      if(!($infertilidad== '' || $infertilidad== '3'))
      {
          $x;
          if($infertilidad=='1')//si
          {
              $x=249;
          }
          else if($infertilidad=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:282.2px;'></div>";   
      }

      if(!($vih_antecedente== '' || $vih_antecedente== '3'))
      {
          $x;
          if($vih_antecedente=='1')//si
          {
              $x=249;
          }
          else if($vih_antecedente=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:291px;'></div>";   
      }

      if(!($cardio_nefro_ant== '' || $cardio_nefro_ant== '3'))
      {
          $x;
          if($cardio_nefro_ant=='1')//si
          {
              $x=249;
          }
          else if($cardio_nefro_ant=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:300.5px;'></div>";   
      }

      if(!($mola_antecedente== '' || $mola_antecedente== '3'))
      {
          $x;
          if($mola_antecedente=='1')//si
          {
              $x=249;
          }
          else if($mola_antecedente=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:319.4px;'></div>";   
      }

      if(!($cond_medica_grave== '' || $cond_medica_grave== '3'))
      {
          $x;
          if($cond_medica_grave=='1')//si
          {
              $x=249;
          }
          else if($cond_medica_grave=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:309.5px;'></div>";   
      }

      if(!($emb_ectopico== '' || $emb_ectopico== '3'))
      {
          $x;
          if($emb_ectopico=='1')//si
          {
              $x=249;
          }
          else if($emb_ectopico=='0')//no
          {
              $x=237.5;
          }
          echo "<div class='equis' style='width: 9px;height: 9px;background-size: 9px 9px;position:absolute;left:".$x."px;top:328.5px;'></div>";   
      }
  ?> 
  
      <!-- antecedentes ginecoobstetricos-->

      <p id="gestas_previas"><?php echo $gestas_previas ?></p>
      <p id="partos_ginec"><?php echo  $partos_ginec ?></p>
      <p id="abortos_ginec"><?php echo $abortos_ginec ?></p>
      <p id="vaginales"><?php echo $vaginales ?></p>
      <p id="cesareas"><?php echo $cesareas ?></p>
      <p id="nacidos_vivos"><?php echo $nacidos_vivos ?></p>
      <p id="nacidos_muertos"><?php echo $nacidos_muertos ?></p>
      <p id="viven_ginec"><?php echo $viven ?></p>
      <p id="muertos_1sem"><?php echo $muertos_1sem ?></p>
      <p id="muertos_despues"><?php echo $muertos_despues ?></p>
      
      <p id="dia_fin"><?php echo $dia_fin?></p>
      <p id="mes_fin"><?php echo $mes_fin?></p>
      <p id="ano_fin"><?php echo $ano_fin?></p>


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

            //$ruptura_ante
            if(!($ruptura_ante==' ' || $ruptura_ante=='0'))
            {    
                $y;
                if($ruptura_ante=='1')//integras
                {
      
                    $y=757;

                }
                else if($ruptura_ante=='2')//rotas
                {
                    
                    $y=770.4;//
                }
                echo "<div class='equis' style='width: 8px;height: 8px;background-size: 8px 8px;position:absolute;left:437px;top:".$y."px;'></div>";

             }       
              




      ?>




      






	</body>
</html>