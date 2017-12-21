<?php
// **********************************************************************
//
// Copyright (c) 2003-2017 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.7.0
//
// <auto-generated>
//
// Generated from file `Cryosoft.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace Cryosoft
{
    global $Cryosoft__t_doubleSeq;

    if(!isset($Cryosoft__t_doubleSeq))
    {
        $Cryosoft__t_doubleSeq = IcePHP_defineSequence('::Cryosoft::doubleSeq', $IcePHP__t_double);
    }
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKBRParam;
    class stSKBRParam
    {
        public function __construct($lfControlTemp=0.0, $lfLoadingRateMax=0.0)
        {
            $this->lfControlTemp = $lfControlTemp;
            $this->lfLoadingRateMax = $lfLoadingRateMax;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKBRParam;
            return IcePHP_stringify($this, $Cryosoft__t_stSKBRParam);
        }

        public $lfControlTemp;
        public $lfLoadingRateMax;
    }

    $Cryosoft__t_stSKBRParam = IcePHP_defineStruct('::Cryosoft::stSKBRParam', '\\Cryosoft\\stSKBRParam', array(
        array('lfControlTemp', $IcePHP__t_double),
        array('lfLoadingRateMax', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKConf;
    class stSKConf
    {
        public function __construct($tcDSN='', $tcUID='', $tcPWD='', $tcTracePath='', $ldIdStudy=0, $ldIdTmp=0, $cConnectToDB=0, $cInitTrace=0)
        {
            $this->tcDSN = $tcDSN;
            $this->tcUID = $tcUID;
            $this->tcPWD = $tcPWD;
            $this->tcTracePath = $tcTracePath;
            $this->ldIdStudy = $ldIdStudy;
            $this->ldIdTmp = $ldIdTmp;
            $this->cConnectToDB = $cConnectToDB;
            $this->cInitTrace = $cInitTrace;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKConf;
            return IcePHP_stringify($this, $Cryosoft__t_stSKConf);
        }

        public $tcDSN;
        public $tcUID;
        public $tcPWD;
        public $tcTracePath;
        public $ldIdStudy;
        public $ldIdTmp;
        public $cConnectToDB;
        public $cInitTrace;
    }

    $Cryosoft__t_stSKConf = IcePHP_defineStruct('::Cryosoft::stSKConf', '\\Cryosoft\\stSKConf', array(
        array('tcDSN', $IcePHP__t_string),
        array('tcUID', $IcePHP__t_string),
        array('tcPWD', $IcePHP__t_string),
        array('tcTracePath', $IcePHP__t_string),
        array('ldIdStudy', $IcePHP__t_long),
        array('ldIdTmp', $IcePHP__t_long),
        array('cConnectToDB', $IcePHP__t_byte),
        array('cInitTrace', $IcePHP__t_byte)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKStudyEquipments;
    class stSKStudyEquipments
    {
        public function __construct($ldId_Study_Equipments=0, $ldId_Equip=0, $ldId_Pipe_Res=0, $ldId_HAverage_Results=0, $ldId_Exh_Res=0, $ldId_Pipe_Gen=0, $ldId_EquipSeries=0, $ldId_Chaim_Results=0, $ldId_Exh_Gen=0, $ldId_Chaim_Genration=0, $ldId_Layout_Generation=0, $ldId_Layout_Results=0, $ldId_Economic_Results=0, $ldId_Profit_Results=0, $ldId_Calc_Params=0, $dLine_Order=0, $dNb_Modul=0, $lfSpecificLength=0.0, $lfSpecificWidth=0.0, $lfAverage_Product_Temp=0.0, $lfAverage_Product_Enthalpy=0.0, $lfEnthalpy_Variation=0.0, $lfPrecis=0.0, $ldEquip_Status=0, $cRun_Calculate=0, $cBrain_SaveToDB=0, $ldBrain_Type=0, $lfTR=null, $lfVC=null, $lfTS=null, $lfDH=null, $lfTExt=0.0)
        {
            $this->ldId_Study_Equipments = $ldId_Study_Equipments;
            $this->ldId_Equip = $ldId_Equip;
            $this->ldId_Pipe_Res = $ldId_Pipe_Res;
            $this->ldId_HAverage_Results = $ldId_HAverage_Results;
            $this->ldId_Exh_Res = $ldId_Exh_Res;
            $this->ldId_Pipe_Gen = $ldId_Pipe_Gen;
            $this->ldId_EquipSeries = $ldId_EquipSeries;
            $this->ldId_Chaim_Results = $ldId_Chaim_Results;
            $this->ldId_Exh_Gen = $ldId_Exh_Gen;
            $this->ldId_Chaim_Genration = $ldId_Chaim_Genration;
            $this->ldId_Layout_Generation = $ldId_Layout_Generation;
            $this->ldId_Layout_Results = $ldId_Layout_Results;
            $this->ldId_Economic_Results = $ldId_Economic_Results;
            $this->ldId_Profit_Results = $ldId_Profit_Results;
            $this->ldId_Calc_Params = $ldId_Calc_Params;
            $this->dLine_Order = $dLine_Order;
            $this->dNb_Modul = $dNb_Modul;
            $this->lfSpecificLength = $lfSpecificLength;
            $this->lfSpecificWidth = $lfSpecificWidth;
            $this->lfAverage_Product_Temp = $lfAverage_Product_Temp;
            $this->lfAverage_Product_Enthalpy = $lfAverage_Product_Enthalpy;
            $this->lfEnthalpy_Variation = $lfEnthalpy_Variation;
            $this->lfPrecis = $lfPrecis;
            $this->ldEquip_Status = $ldEquip_Status;
            $this->cRun_Calculate = $cRun_Calculate;
            $this->cBrain_SaveToDB = $cBrain_SaveToDB;
            $this->ldBrain_Type = $ldBrain_Type;
            $this->lfTR = $lfTR;
            $this->lfVC = $lfVC;
            $this->lfTS = $lfTS;
            $this->lfDH = $lfDH;
            $this->lfTExt = $lfTExt;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKStudyEquipments;
            return IcePHP_stringify($this, $Cryosoft__t_stSKStudyEquipments);
        }

        public $ldId_Study_Equipments;
        public $ldId_Equip;
        public $ldId_Pipe_Res;
        public $ldId_HAverage_Results;
        public $ldId_Exh_Res;
        public $ldId_Pipe_Gen;
        public $ldId_EquipSeries;
        public $ldId_Chaim_Results;
        public $ldId_Exh_Gen;
        public $ldId_Chaim_Genration;
        public $ldId_Layout_Generation;
        public $ldId_Layout_Results;
        public $ldId_Economic_Results;
        public $ldId_Profit_Results;
        public $ldId_Calc_Params;
        public $dLine_Order;
        public $dNb_Modul;
        public $lfSpecificLength;
        public $lfSpecificWidth;
        public $lfAverage_Product_Temp;
        public $lfAverage_Product_Enthalpy;
        public $lfEnthalpy_Variation;
        public $lfPrecis;
        public $ldEquip_Status;
        public $cRun_Calculate;
        public $cBrain_SaveToDB;
        public $ldBrain_Type;
        public $lfTR;
        public $lfVC;
        public $lfTS;
        public $lfDH;
        public $lfTExt;
    }

    $Cryosoft__t_stSKStudyEquipments = IcePHP_defineStruct('::Cryosoft::stSKStudyEquipments', '\\Cryosoft\\stSKStudyEquipments', array(
        array('ldId_Study_Equipments', $IcePHP__t_long),
        array('ldId_Equip', $IcePHP__t_long),
        array('ldId_Pipe_Res', $IcePHP__t_long),
        array('ldId_HAverage_Results', $IcePHP__t_long),
        array('ldId_Exh_Res', $IcePHP__t_long),
        array('ldId_Pipe_Gen', $IcePHP__t_long),
        array('ldId_EquipSeries', $IcePHP__t_long),
        array('ldId_Chaim_Results', $IcePHP__t_long),
        array('ldId_Exh_Gen', $IcePHP__t_long),
        array('ldId_Chaim_Genration', $IcePHP__t_long),
        array('ldId_Layout_Generation', $IcePHP__t_long),
        array('ldId_Layout_Results', $IcePHP__t_long),
        array('ldId_Economic_Results', $IcePHP__t_long),
        array('ldId_Profit_Results', $IcePHP__t_long),
        array('ldId_Calc_Params', $IcePHP__t_long),
        array('dLine_Order', $IcePHP__t_short),
        array('dNb_Modul', $IcePHP__t_short),
        array('lfSpecificLength', $IcePHP__t_double),
        array('lfSpecificWidth', $IcePHP__t_double),
        array('lfAverage_Product_Temp', $IcePHP__t_double),
        array('lfAverage_Product_Enthalpy', $IcePHP__t_double),
        array('lfEnthalpy_Variation', $IcePHP__t_double),
        array('lfPrecis', $IcePHP__t_double),
        array('ldEquip_Status', $IcePHP__t_long),
        array('cRun_Calculate', $IcePHP__t_byte),
        array('cBrain_SaveToDB', $IcePHP__t_byte),
        array('ldBrain_Type', $IcePHP__t_long),
        array('lfTR', $Cryosoft__t_doubleSeq),
        array('lfVC', $Cryosoft__t_doubleSeq),
        array('lfTS', $Cryosoft__t_doubleSeq),
        array('lfDH', $Cryosoft__t_doubleSeq),
        array('lfTExt', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKConsumDefs;
    class stSKConsumDefs
    {
        public function __construct($lfTemp=0.0, $lfConsPerm=0.0, $lfConsGetCold=0.0)
        {
            $this->lfTemp = $lfTemp;
            $this->lfConsPerm = $lfConsPerm;
            $this->lfConsGetCold = $lfConsGetCold;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKConsumDefs;
            return IcePHP_stringify($this, $Cryosoft__t_stSKConsumDefs);
        }

        public $lfTemp;
        public $lfConsPerm;
        public $lfConsGetCold;
    }

    $Cryosoft__t_stSKConsumDefs = IcePHP_defineStruct('::Cryosoft::stSKConsumDefs', '\\Cryosoft\\stSKConsumDefs', array(
        array('lfTemp', $IcePHP__t_double),
        array('lfConsPerm', $IcePHP__t_double),
        array('lfConsGetCold', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKConsumption;
    class stSKConsumption
    {
        public function __construct($luNbConsum=0, $pConsumDefs=null)
        {
            $this->luNbConsum = $luNbConsum;
            $this->pConsumDefs = is_null($pConsumDefs) ? new \Cryosoft\stSKConsumDefs : $pConsumDefs;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKConsumption;
            return IcePHP_stringify($this, $Cryosoft__t_stSKConsumption);
        }

        public $luNbConsum;
        public $pConsumDefs;
    }

    $Cryosoft__t_stSKConsumption = IcePHP_defineStruct('::Cryosoft::stSKConsumption', '\\Cryosoft\\stSKConsumption', array(
        array('luNbConsum', $IcePHP__t_long),
        array('pConsumDefs', $Cryosoft__t_stSKConsumDefs)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKShelves;
    class stSKShelves
    {
        public function __construct($fInterval=0.0, $sNumber=0)
        {
            $this->fInterval = $fInterval;
            $this->sNumber = $sNumber;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKShelves;
            return IcePHP_stringify($this, $Cryosoft__t_stSKShelves);
        }

        public $fInterval;
        public $sNumber;
    }

    $Cryosoft__t_stSKShelves = IcePHP_defineStruct('::Cryosoft::stSKShelves', '\\Cryosoft\\stSKShelves', array(
        array('fInterval', $IcePHP__t_float),
        array('sNumber', $IcePHP__t_short)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKZones;
    class stSKZones
    {
        public function __construct($lfLength=0.0)
        {
            $this->lfLength = $lfLength;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKZones;
            return IcePHP_stringify($this, $Cryosoft__t_stSKZones);
        }

        public $lfLength;
    }

    $Cryosoft__t_stSKZones = IcePHP_defineStruct('::Cryosoft::stSKZones', '\\Cryosoft\\stSKZones', array(
        array('lfLength', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKCalculationParameters;
    class stSKCalculationParameters
    {
        public function __construct($ldId_Calc_Params=0, $ldId_Study_Equipments=0, $cHoriz_Scan=0, $cVert_Scan=0, $ldMax_It_Nb=0, $ldTime_Steps_Nb=0, $fRelax_Coeff=0.0, $fTime_Step=0.0, $ldStorage_Step=0, $ldPrecision_Log_Step=0, $lfPrecision=0.0, $fStop_Top_Surf=0.0, $fStop_Int=0.0, $fStop_Bottom_Surf=0.0, $fStop_Avg=0.0, $cStudy_Alpha_Top_Fixed=0, $lfStudy_Alpha_Top=0.0, $cStudy_Alpha_Bottom_Fixed=0, $lfStudy_Alpha_Bottom=0.0, $cStudy_Alpha_Left_Fixed=0, $lfStudy_Alpha_Left=0.0, $cStudy_Alpha_Right_Fixed=0, $lfStudy_Alpha_Right=0.0, $cStudy_Alpha_Front_Fixed=0, $lfStudy_Alpha_Front=0.0, $cStudy_Alpha_Rear_Fixed=0, $lfStudy_Alpha_Rear=0.0, $ldNb_Optim=0, $lfError_T=0.0, $lfError_H=0.0)
        {
            $this->ldId_Calc_Params = $ldId_Calc_Params;
            $this->ldId_Study_Equipments = $ldId_Study_Equipments;
            $this->cHoriz_Scan = $cHoriz_Scan;
            $this->cVert_Scan = $cVert_Scan;
            $this->ldMax_It_Nb = $ldMax_It_Nb;
            $this->ldTime_Steps_Nb = $ldTime_Steps_Nb;
            $this->fRelax_Coeff = $fRelax_Coeff;
            $this->fTime_Step = $fTime_Step;
            $this->ldStorage_Step = $ldStorage_Step;
            $this->ldPrecision_Log_Step = $ldPrecision_Log_Step;
            $this->lfPrecision = $lfPrecision;
            $this->fStop_Top_Surf = $fStop_Top_Surf;
            $this->fStop_Int = $fStop_Int;
            $this->fStop_Bottom_Surf = $fStop_Bottom_Surf;
            $this->fStop_Avg = $fStop_Avg;
            $this->cStudy_Alpha_Top_Fixed = $cStudy_Alpha_Top_Fixed;
            $this->lfStudy_Alpha_Top = $lfStudy_Alpha_Top;
            $this->cStudy_Alpha_Bottom_Fixed = $cStudy_Alpha_Bottom_Fixed;
            $this->lfStudy_Alpha_Bottom = $lfStudy_Alpha_Bottom;
            $this->cStudy_Alpha_Left_Fixed = $cStudy_Alpha_Left_Fixed;
            $this->lfStudy_Alpha_Left = $lfStudy_Alpha_Left;
            $this->cStudy_Alpha_Right_Fixed = $cStudy_Alpha_Right_Fixed;
            $this->lfStudy_Alpha_Right = $lfStudy_Alpha_Right;
            $this->cStudy_Alpha_Front_Fixed = $cStudy_Alpha_Front_Fixed;
            $this->lfStudy_Alpha_Front = $lfStudy_Alpha_Front;
            $this->cStudy_Alpha_Rear_Fixed = $cStudy_Alpha_Rear_Fixed;
            $this->lfStudy_Alpha_Rear = $lfStudy_Alpha_Rear;
            $this->ldNb_Optim = $ldNb_Optim;
            $this->lfError_T = $lfError_T;
            $this->lfError_H = $lfError_H;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKCalculationParameters;
            return IcePHP_stringify($this, $Cryosoft__t_stSKCalculationParameters);
        }

        public $ldId_Calc_Params;
        public $ldId_Study_Equipments;
        public $cHoriz_Scan;
        public $cVert_Scan;
        public $ldMax_It_Nb;
        public $ldTime_Steps_Nb;
        public $fRelax_Coeff;
        public $fTime_Step;
        public $ldStorage_Step;
        public $ldPrecision_Log_Step;
        public $lfPrecision;
        public $fStop_Top_Surf;
        public $fStop_Int;
        public $fStop_Bottom_Surf;
        public $fStop_Avg;
        public $cStudy_Alpha_Top_Fixed;
        public $lfStudy_Alpha_Top;
        public $cStudy_Alpha_Bottom_Fixed;
        public $lfStudy_Alpha_Bottom;
        public $cStudy_Alpha_Left_Fixed;
        public $lfStudy_Alpha_Left;
        public $cStudy_Alpha_Right_Fixed;
        public $lfStudy_Alpha_Right;
        public $cStudy_Alpha_Front_Fixed;
        public $lfStudy_Alpha_Front;
        public $cStudy_Alpha_Rear_Fixed;
        public $lfStudy_Alpha_Rear;
        public $ldNb_Optim;
        public $lfError_T;
        public $lfError_H;
    }

    $Cryosoft__t_stSKCalculationParameters = IcePHP_defineStruct('::Cryosoft::stSKCalculationParameters', '\\Cryosoft\\stSKCalculationParameters', array(
        array('ldId_Calc_Params', $IcePHP__t_long),
        array('ldId_Study_Equipments', $IcePHP__t_long),
        array('cHoriz_Scan', $IcePHP__t_byte),
        array('cVert_Scan', $IcePHP__t_byte),
        array('ldMax_It_Nb', $IcePHP__t_long),
        array('ldTime_Steps_Nb', $IcePHP__t_long),
        array('fRelax_Coeff', $IcePHP__t_float),
        array('fTime_Step', $IcePHP__t_float),
        array('ldStorage_Step', $IcePHP__t_long),
        array('ldPrecision_Log_Step', $IcePHP__t_long),
        array('lfPrecision', $IcePHP__t_double),
        array('fStop_Top_Surf', $IcePHP__t_float),
        array('fStop_Int', $IcePHP__t_float),
        array('fStop_Bottom_Surf', $IcePHP__t_float),
        array('fStop_Avg', $IcePHP__t_float),
        array('cStudy_Alpha_Top_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Top', $IcePHP__t_double),
        array('cStudy_Alpha_Bottom_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Bottom', $IcePHP__t_double),
        array('cStudy_Alpha_Left_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Left', $IcePHP__t_double),
        array('cStudy_Alpha_Right_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Right', $IcePHP__t_double),
        array('cStudy_Alpha_Front_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Front', $IcePHP__t_double),
        array('cStudy_Alpha_Rear_Fixed', $IcePHP__t_byte),
        array('lfStudy_Alpha_Rear', $IcePHP__t_double),
        array('ldNb_Optim', $IcePHP__t_long),
        array('lfError_T', $IcePHP__t_double),
        array('lfError_H', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKEquipmentProfileElt;
    class stSKEquipmentProfileElt
    {
        public function __construct($lfAlphaTop=0.0, $lfAlphaBottom=0.0, $lfAlphaLeft=0.0, $lfAlphaRight=0.0, $lfAlphaFront=0.0, $lfAlphaRear=0.0, $lfTempTop=0.0, $lfTempBottom=0.0, $lfTempLeft=0.0, $lfTempRight=0.0, $lfTempFront=0.0, $lfTempRear=0.0, $lfAlphaAvg=0.0, $lfTempAvg=0.0)
        {
            $this->lfAlphaTop = $lfAlphaTop;
            $this->lfAlphaBottom = $lfAlphaBottom;
            $this->lfAlphaLeft = $lfAlphaLeft;
            $this->lfAlphaRight = $lfAlphaRight;
            $this->lfAlphaFront = $lfAlphaFront;
            $this->lfAlphaRear = $lfAlphaRear;
            $this->lfTempTop = $lfTempTop;
            $this->lfTempBottom = $lfTempBottom;
            $this->lfTempLeft = $lfTempLeft;
            $this->lfTempRight = $lfTempRight;
            $this->lfTempFront = $lfTempFront;
            $this->lfTempRear = $lfTempRear;
            $this->lfAlphaAvg = $lfAlphaAvg;
            $this->lfTempAvg = $lfTempAvg;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKEquipmentProfileElt;
            return IcePHP_stringify($this, $Cryosoft__t_stSKEquipmentProfileElt);
        }

        public $lfAlphaTop;
        public $lfAlphaBottom;
        public $lfAlphaLeft;
        public $lfAlphaRight;
        public $lfAlphaFront;
        public $lfAlphaRear;
        public $lfTempTop;
        public $lfTempBottom;
        public $lfTempLeft;
        public $lfTempRight;
        public $lfTempFront;
        public $lfTempRear;
        public $lfAlphaAvg;
        public $lfTempAvg;
    }

    $Cryosoft__t_stSKEquipmentProfileElt = IcePHP_defineStruct('::Cryosoft::stSKEquipmentProfileElt', '\\Cryosoft\\stSKEquipmentProfileElt', array(
        array('lfAlphaTop', $IcePHP__t_double),
        array('lfAlphaBottom', $IcePHP__t_double),
        array('lfAlphaLeft', $IcePHP__t_double),
        array('lfAlphaRight', $IcePHP__t_double),
        array('lfAlphaFront', $IcePHP__t_double),
        array('lfAlphaRear', $IcePHP__t_double),
        array('lfTempTop', $IcePHP__t_double),
        array('lfTempBottom', $IcePHP__t_double),
        array('lfTempLeft', $IcePHP__t_double),
        array('lfTempRight', $IcePHP__t_double),
        array('lfTempFront', $IcePHP__t_double),
        array('lfTempRear', $IcePHP__t_double),
        array('lfAlphaAvg', $IcePHP__t_double),
        array('lfTempAvg', $IcePHP__t_double)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKEBEqptCharact;
    class stSKEBEqptCharact
    {
        public function __construct($lfPosition=0.0, $stEqptProfileElt=null)
        {
            $this->lfPosition = $lfPosition;
            $this->stEqptProfileElt = is_null($stEqptProfileElt) ? new \Cryosoft\stSKEquipmentProfileElt : $stEqptProfileElt;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKEBEqptCharact;
            return IcePHP_stringify($this, $Cryosoft__t_stSKEBEqptCharact);
        }

        public $lfPosition;
        public $stEqptProfileElt;
    }

    $Cryosoft__t_stSKEBEqptCharact = IcePHP_defineStruct('::Cryosoft::stSKEBEqptCharact', '\\Cryosoft\\stSKEBEqptCharact', array(
        array('lfPosition', $IcePHP__t_double),
        array('stEqptProfileElt', $Cryosoft__t_stSKEquipmentProfileElt)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKEBResult;
    class stSKEBResult
    {
        public function __construct($luNumberOfRecords=0, $lfTR=0.0, $pEBEqptCharact=null)
        {
            $this->luNumberOfRecords = $luNumberOfRecords;
            $this->lfTR = $lfTR;
            $this->pEBEqptCharact = is_null($pEBEqptCharact) ? new \Cryosoft\stSKEBEqptCharact : $pEBEqptCharact;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKEBResult;
            return IcePHP_stringify($this, $Cryosoft__t_stSKEBResult);
        }

        public $luNumberOfRecords;
        public $lfTR;
        public $pEBEqptCharact;
    }

    $Cryosoft__t_stSKEBResult = IcePHP_defineStruct('::Cryosoft::stSKEBResult', '\\Cryosoft\\stSKEBResult', array(
        array('luNumberOfRecords', $IcePHP__t_long),
        array('lfTR', $IcePHP__t_double),
        array('pEBEqptCharact', $Cryosoft__t_stSKEBEqptCharact)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKEBResultSeq;

    if(!isset($Cryosoft__t_stSKEBResultSeq))
    {
        $Cryosoft__t_stSKEBResultSeq = IcePHP_defineSequence('::Cryosoft::stSKEBResultSeq', $Cryosoft__t_stSKEBResult);
    }
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKMultiProfile;
    class stSKMultiProfile
    {
        public function __construct($luNumberOfRecords=0, $tProfile=null)
        {
            $this->luNumberOfRecords = $luNumberOfRecords;
            $this->tProfile = $tProfile;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKMultiProfile;
            return IcePHP_stringify($this, $Cryosoft__t_stSKMultiProfile);
        }

        public $luNumberOfRecords;
        public $tProfile;
    }

    $Cryosoft__t_stSKMultiProfile = IcePHP_defineStruct('::Cryosoft::stSKMultiProfile', '\\Cryosoft\\stSKMultiProfile', array(
        array('luNumberOfRecords', $IcePHP__t_long),
        array('tProfile', $Cryosoft__t_stSKEBResultSeq)));
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKShelvesSeq;

    if(!isset($Cryosoft__t_stSKShelvesSeq))
    {
        $Cryosoft__t_stSKShelvesSeq = IcePHP_defineSequence('::Cryosoft::stSKShelvesSeq', $Cryosoft__t_stSKShelves);
    }
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKZonesSeq;

    if(!isset($Cryosoft__t_stSKZonesSeq))
    {
        $Cryosoft__t_stSKZonesSeq = IcePHP_defineSequence('::Cryosoft::stSKZonesSeq', $Cryosoft__t_stSKZones);
    }
}

namespace Cryosoft
{
    global $Cryosoft__t_stSKEquipment;
    class stSKEquipment
    {
        public function __construct($dEquipDllIdx=0, $luIdEquip=0, $luCoolingFamily=0, $luIdEquipSeries=0, $cFluidType=0, $cStandard=0, $cBatch=0, $dCell=0, $lfLenght=0.0, $lfWidth=0.0, $lfHeight=0.0, $lfModul_Len=0.0, $dNbMaxModul=0, $dNb_Tr=0, $dNb_Ts=0, $dNb_Vc=0, $lfMaxProductFlow=0.0, $luNbNozzlesMax=0, $luNbRamps=0, $lfTmp_Regul_Min=0.0, $dFatherDllIdx=0, $ldCapabilities=0, $ldItem_TR=0, $ldItem_TS=0, $ldItem_VC=0, $ldItem_Precis=0, $ldItem_TimeStep=0, $stEquipConfig=null, $stConsumTable=null, $luNbShelves=0, $Shelves=null, $luNbZones=0, $Zones=null, $tlfRampPositions=null, $stCalcParam=null, $stProfiles=null)
        {
            $this->dEquipDllIdx = $dEquipDllIdx;
            $this->luIdEquip = $luIdEquip;
            $this->luCoolingFamily = $luCoolingFamily;
            $this->luIdEquipSeries = $luIdEquipSeries;
            $this->cFluidType = $cFluidType;
            $this->cStandard = $cStandard;
            $this->cBatch = $cBatch;
            $this->dCell = $dCell;
            $this->lfLenght = $lfLenght;
            $this->lfWidth = $lfWidth;
            $this->lfHeight = $lfHeight;
            $this->lfModul_Len = $lfModul_Len;
            $this->dNbMaxModul = $dNbMaxModul;
            $this->dNb_Tr = $dNb_Tr;
            $this->dNb_Ts = $dNb_Ts;
            $this->dNb_Vc = $dNb_Vc;
            $this->lfMaxProductFlow = $lfMaxProductFlow;
            $this->luNbNozzlesMax = $luNbNozzlesMax;
            $this->luNbRamps = $luNbRamps;
            $this->lfTmp_Regul_Min = $lfTmp_Regul_Min;
            $this->dFatherDllIdx = $dFatherDllIdx;
            $this->ldCapabilities = $ldCapabilities;
            $this->ldItem_TR = $ldItem_TR;
            $this->ldItem_TS = $ldItem_TS;
            $this->ldItem_VC = $ldItem_VC;
            $this->ldItem_Precis = $ldItem_Precis;
            $this->ldItem_TimeStep = $ldItem_TimeStep;
            $this->stEquipConfig = is_null($stEquipConfig) ? new \Cryosoft\stSKStudyEquipments : $stEquipConfig;
            $this->stConsumTable = is_null($stConsumTable) ? new \Cryosoft\stSKConsumption : $stConsumTable;
            $this->luNbShelves = $luNbShelves;
            $this->Shelves = $Shelves;
            $this->luNbZones = $luNbZones;
            $this->Zones = $Zones;
            $this->tlfRampPositions = $tlfRampPositions;
            $this->stCalcParam = is_null($stCalcParam) ? new \Cryosoft\stSKCalculationParameters : $stCalcParam;
            $this->stProfiles = is_null($stProfiles) ? new \Cryosoft\stSKMultiProfile : $stProfiles;
        }

        public function __toString()
        {
            global $Cryosoft__t_stSKEquipment;
            return IcePHP_stringify($this, $Cryosoft__t_stSKEquipment);
        }

        public $dEquipDllIdx;
        public $luIdEquip;
        public $luCoolingFamily;
        public $luIdEquipSeries;
        public $cFluidType;
        public $cStandard;
        public $cBatch;
        public $dCell;
        public $lfLenght;
        public $lfWidth;
        public $lfHeight;
        public $lfModul_Len;
        public $dNbMaxModul;
        public $dNb_Tr;
        public $dNb_Ts;
        public $dNb_Vc;
        public $lfMaxProductFlow;
        public $luNbNozzlesMax;
        public $luNbRamps;
        public $lfTmp_Regul_Min;
        public $dFatherDllIdx;
        public $ldCapabilities;
        public $ldItem_TR;
        public $ldItem_TS;
        public $ldItem_VC;
        public $ldItem_Precis;
        public $ldItem_TimeStep;
        public $stEquipConfig;
        public $stConsumTable;
        public $luNbShelves;
        public $Shelves;
        public $luNbZones;
        public $Zones;
        public $tlfRampPositions;
        public $stCalcParam;
        public $stProfiles;
    }

    $Cryosoft__t_stSKEquipment = IcePHP_defineStruct('::Cryosoft::stSKEquipment', '\\Cryosoft\\stSKEquipment', array(
        array('dEquipDllIdx', $IcePHP__t_short),
        array('luIdEquip', $IcePHP__t_long),
        array('luCoolingFamily', $IcePHP__t_long),
        array('luIdEquipSeries', $IcePHP__t_long),
        array('cFluidType', $IcePHP__t_byte),
        array('cStandard', $IcePHP__t_byte),
        array('cBatch', $IcePHP__t_byte),
        array('dCell', $IcePHP__t_short),
        array('lfLenght', $IcePHP__t_double),
        array('lfWidth', $IcePHP__t_double),
        array('lfHeight', $IcePHP__t_double),
        array('lfModul_Len', $IcePHP__t_double),
        array('dNbMaxModul', $IcePHP__t_short),
        array('dNb_Tr', $IcePHP__t_short),
        array('dNb_Ts', $IcePHP__t_short),
        array('dNb_Vc', $IcePHP__t_short),
        array('lfMaxProductFlow', $IcePHP__t_double),
        array('luNbNozzlesMax', $IcePHP__t_long),
        array('luNbRamps', $IcePHP__t_long),
        array('lfTmp_Regul_Min', $IcePHP__t_double),
        array('dFatherDllIdx', $IcePHP__t_short),
        array('ldCapabilities', $IcePHP__t_long),
        array('ldItem_TR', $IcePHP__t_long),
        array('ldItem_TS', $IcePHP__t_long),
        array('ldItem_VC', $IcePHP__t_long),
        array('ldItem_Precis', $IcePHP__t_long),
        array('ldItem_TimeStep', $IcePHP__t_long),
        array('stEquipConfig', $Cryosoft__t_stSKStudyEquipments),
        array('stConsumTable', $Cryosoft__t_stSKConsumption),
        array('luNbShelves', $IcePHP__t_long),
        array('Shelves', $Cryosoft__t_stSKShelvesSeq),
        array('luNbZones', $IcePHP__t_long),
        array('Zones', $Cryosoft__t_stSKZonesSeq),
        array('tlfRampPositions', $Cryosoft__t_doubleSeq),
        array('stCalcParam', $Cryosoft__t_stSKCalculationParameters),
        array('stProfiles', $Cryosoft__t_stSKMultiProfile)));
}
?>