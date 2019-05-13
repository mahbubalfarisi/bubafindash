<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Debt;
use App\Cash;
use App\Jenius;
use App\Flexi;
use App\Mandiri;
use App\Ovo;
use App\Linkaja;
use App\Gopay;
use App\Crypto;
use App\Mtr;

class CalcController extends Controller
{
    // Calculation for Cash Asset
    public function creditcash ()
    {
        $cashes = Cash::all();
        $creditcash = '0';

        foreach ($cashes as $cash) {
            $credit = $cash->credit;
            $creditcash = $creditcash + $cash->credit;
        }

        return $creditcash;
    }

    public function debitcash ()
    {
        $cashes = Cash::all();
        $debitcash = '0';

        foreach ($cashes as $cash) {
            $debit = $cash->debit;
            $debitcash = $debitcash + $cash->debit;
        }

        return $debitcash;
    }

    public function balancecash ()
    {
        $balancecash = '0';
        $creditc = $this->creditcash();
        $debitc = $this->debitcash();

        $balancecash = $creditc - $debitc;

        return $balancecash;
    }

    public function gettotalcash ()
    {
        $tcash = $this->balancecash();

        return $tcash;
    }

    // Calculation for Jenius Reguler
    public function creditjenius ()
    {
        $jeniuses = Jenius::all();
        $creditjenius = '0';

        foreach ($jeniuses as $jenius) {
            $credit = $jenius->credit;
            $creditjenius = $creditjenius + $jenius->credit;
        }

        return $creditjenius;
    }

    public function debitjenius ()
    {
        $jeniuses = Jenius::all();
        $debitjenius = '0';

        foreach ($jeniuses as $jenius) {
            $debit = $jenius->debit;
            $debitjenius = $debitjenius + $jenius->debit;
        }

        return $debitjenius;
    }

    public function balancejenius ()
    {
        $balancejenius = '0';
        $credito = $this->creditjenius();
        $debito = $this->debitjenius();

        $balancejenius = $credito - $debito;

        return $balancejenius;
    }

    public function gettotaljenius ()
    {
        $tjenius = $this->balancejenius();

        return $tjenius;
    }

    // Calculation for Flexi Server Asset
    public function creditflexi ()
    {
        $flexis = Flexi::all();
        $creditflexi = '0';

        foreach ($flexis as $flexi) {
            $credit = $flexi->credit;
            $creditflexi = $creditflexi + $flexi->credit;
        }

        return $creditflexi;
    }

    public function debitflexi ()
    {
        $flexis = Flexi::all();
        $debitflexi = '0';

        foreach ($flexis as $flexi) {
            $debit = $flexi->debit;
            $debitflexi = $debitflexi + $flexi->debit;
        }

        return $debitflexi;
    }

    public function balanceflexi ()
    {
        $balanceflexi = '0';
        $credito = $this->creditflexi();
        $debito = $this->debitflexi();

        $balanceflexi = $credito - $debito;

        return $balanceflexi;
    }

    public function gettotalflexi ()
    {
        $tflexi = $this->balanceflexi();

        return $tflexi;
    }

    // Calculation for Mandiri Asset
    public function creditmandiri ()
    {
        $mandiris = Mandiri::all();
        $creditmandiri = '0';

        foreach ($mandiris as $mandiri) {
            $credit = $mandiri->credit;
            $creditmandiri = $creditmandiri + $mandiri->credit;
        }

        return $creditmandiri;
    }

    public function debitmandiri ()
    {
        $mandiris = Mandiri::all();
        $debitmandiri = '0';

        foreach ($mandiris as $mandiri) {
            $debit = $mandiri->debit;
            $debitmandiri = $debitmandiri + $mandiri->debit;
        }

        return $debitmandiri;
    }

    public function balancemandiri ()
    {
        $balancemandiri = '0';
        $creditm = $this->creditmandiri();
        $debitm = $this->debitmandiri();

        $balancemandiri = $creditm - $debitm;

        return $balancemandiri;
    }

    public function gettotalmandiri ()
    {
        $tmandiri = $this->balancemandiri();

        return $tmandiri;
    }
    // Calculation for OVO Asset
    public function creditovo ()
    {
        $ovos = Ovo::all();
        $creditovo = '0';

        foreach ($ovos as $ovo) {
            $credit = $ovo->credit;
            $creditovo = $creditovo + $ovo->credit;
        }

        return $creditovo;
    }

    public function debitovo ()
    {
        $ovos = Ovo::all();
        $debitovo = '0';

        foreach ($ovos as $ovo) {
            $debit = $ovo->debit;
            $debitovo = $debitovo + $ovo->debit;
        }

        return $debitovo;
    }

    public function balanceovo ()
    {
        $balanceovo = '0';
        $credito = $this->creditovo();
        $debito = $this->debitovo();

        $balanceovo = $credito - $debito;

        return $balanceovo;
    }

    public function gettotalovo ()
    {
        $tovo = $this->balanceovo();

        return $tovo;
    }

    // Calculation for linkaja Asset
    public function creditlinkaja ()
    {
        $linkajas = Linkaja::all();
        $creditlinkaja = '0';

        foreach ($linkajas as $linkaja) {
            $credit = $linkaja->credit;
            $creditlinkaja = $creditlinkaja + $linkaja->credit;
        }

        return $creditlinkaja;
    }

    public function debitlinkaja ()
    {
        $linkajas = Linkaja::all();
        $debitlinkaja = '0';

        foreach ($linkajas as $linkaja) {
            $debit = $linkaja->debit;
            $debitlinkaja = $debitlinkaja + $linkaja->debit;
        }

        return $debitlinkaja;
    }

    public function balancelinkaja ()
    {
        $balancelinkaja = '0';
        $credito = $this->creditlinkaja();
        $debito = $this->debitlinkaja();

        $balancelinkaja = $credito - $debito;

        return $balancelinkaja;
    }

    public function gettotallinkaja ()
    {
        $tlinkaja = $this->balancelinkaja();

        return $tlinkaja;
    }

    // Calculation for Gopay Asset
    public function creditgopay ()
    {
        $gopays = Gopay::all();
        $creditgopay = '0';

        foreach ($gopays as $gopay) {
            $credit = $gopay->credit;
            $creditgopay = $creditgopay + $gopay->credit;
        }

        return $creditgopay;
    }

    public function debitgopay ()
    {
        $gopays = Gopay::all();
        $debitgopay = '0';

        foreach ($gopays as $gopay) {
            $debit = $gopay->debit;
            $debitgopay = $debitgopay + $gopay->debit;
        }

        return $debitgopay;
    }

    public function balancegopay ()
    {
        $balancegopay = '0';
        $credito = $this->creditgopay();
        $debito = $this->debitgopay();

        $balancegopay = $credito - $debito;

        return $balancegopay;
    }

    public function gettotalgopay ()
    {
        $tgopay = $this->balancegopay();

        return $tgopay;
    }

    // Calculation for Crypto
    public function gettotaleth ()
    {
        $cryptos = Crypto::all();
        $balancecrypto = '0';
        $teth = '0';
        $price = '2736929.58';

        foreach ($cryptos as $crypto) {
            $balancecrypto = $balancecrypto + $crypto->balance;
            $teth = $balancecrypto * $price;
        }

        return $teth;
    }

    // Calculation for Mandiri Tabungan Rencana
    public function gettotalmtr ()
    {
        $mtrs = Mtr::all();
        $tmtr = '0';

        foreach ($mtrs as $mtr) {
            $credit = $mtr->credit;
            $tmtr = $tmtr + $mtr->credit;
        }

        return $tmtr;
    }

    // Get Total Asset
    public function gettotalasset ()
    {
        $tcash = $this->gettotalcash();
        $tjenius = $this->gettotaljenius();
        $tflexi = $this->gettotalflexi();
        $tmandiri = $this->gettotalmandiri();
        $tovo = $this->gettotalovo();
        $tlinkaja = $this->gettotallinkaja();
        $tgopay = $this->gettotalgopay();
        $teth = $this->gettotaleth();
        $tmtr = $this->gettotalmtr();
        $totalasset = '0';
        $totalasset = $tcash + $tjenius + $tflexi + $tmandiri + $tovo + $tlinkaja + $tgopay + $teth + $tmtr;

        return $totalasset;
    }

    // Get Liquid Asset
    public function getliquidasset ()
    {
        $tcash = $this->gettotalcash();
        $tjenius = $this->gettotaljenius();
        $tflexi = $this->gettotalflexi();
        $tmandiri = $this->gettotalmandiri();
        $tovo = $this->gettotalovo();
        $tlinkaja = $this->gettotallinkaja();
        $tgopay = $this->gettotalgopay();
        $liquidasset = '0';
        $liquidasset = $tcash + $tjenius + $tflexi + $tmandiri + $tovo + $tlinkaja + $tgopay;

        return $liquidasset;
    }

    // Calculation for Debt
    public function sumdebt ()
    {
        $debts = Debt::all();
        $totaldebt = '0';

        foreach ($debts as $debt) {
            $amount = $debt->amount;
            $totaldebt = $totaldebt + $debt->amount;
        }

        return $totaldebt;
    }

    public function remainingdebt ()
    {
        $remain = Debt::all();
        $remainingdebt = '0';

        foreach ($remain as $remaining) {
            $remains = $remaining->remaining;
            $remainingdebt = $remainingdebt + $remaining->remaining;
        }

        return $remainingdebt;
    }

    // Calculation for Debt to Income
    public function debtratio ()
    {   
        $debtratio = '0';
        $avgmonthincome = '5500000';
        $liabilities = '2950000';

        $debtratio = $liabilities / $avgmonthincome * 100;

        return $debtratio;
    }

    public function debtratiostatus()
    {
        $debtratio_drs = $this->debtratio();
        $debtratiostatus = 'Good';

        if ($debtratio_drs < 20) {
            $debtratiostatus = 'Ideal';
        }
        elseif ($debtratio_drs >= 20 && $debtratio_drs <= 36) {
            $debtratiostatus = 'Good';
        }
        elseif ($debtratio_drs >= 37 && $debtratio_drs <= 42) {
            $debtratiostatus = 'Warning';
        }
        elseif ($debtratio_drs >= 43 && $debtratio_drs <= 49) {
            $debtratiostatus = 'Danger';
        }
        elseif ($debtratio_drs >= 50) {
            $debtratiostatus = 'Catasthropic';
        }

        return $debtratiostatus;
    }

    // Calculation for Liquidity
    public function daytoliquid ()
    {
        $liquidasset = $this->getliquidasset();
        $avgmonthexp = '1836168';

        $daytoliquid = $liquidasset / ($avgmonthexp / 30);

        return $daytoliquid;
    }

    public function liquidityratio ()
    { 
        $dayliquid = $this->daytoliquid();
        $liqratio = $dayliquid * 100 / 180 ;

        return $liqratio;
    }

    public function liqratiostatus()
    {
        $liqratio_lrs = $this->liquidityratio();
        $liqratiostatus = 'Not Ideal';

        if ($liqratio_lrs >= 50 && $liqratio_lrs < 100) {
            $liqratiostatus = 'Ideal';
        }
        elseif ($liqratio_lrs >= 17 && $liqratio_lrs < 50) {
            $liqratiostatus = 'Good but Not Recommended';
        }
        elseif ($liqratio_lrs < 17) {
            $liqratiostatus = 'Warning';
        }

        return $liqratiostatus;
    }

    public function dayliqsuggest()
    {
        $liqratio_dls = $this->liquidityratio();
        $liqsuggest = 'Not Ideal';

        if ($liqratio_dls >= 50 && $liqratio_dls < 100) {
            $liqsuggest = 'Keep this condition';
        }
        elseif ($liqratio_dls >= 17 && $liqratio_dls < 50) {
            $liqsuggest = 'You\'re safe but not in an ideal condition';
        }
        elseif ($liqratio_dls < 17) {
            $liqsuggest = 'Please, increase your liquid assets immediately';
        }

        return $liqsuggest;
    }

    // Calculation for Net Asset
    public function netasset ()
    {
        $totalasset_na = $this->gettotalasset();
        $totaldebt_na = $this->sumdebt();
        $netasset = $totalasset_na - $totaldebt_na;

        return $netasset;
    }

    // Calculation for Solvency
    public function solvencyratio ()
    {
        $netasset_sr = $this->netasset();
        $totalasset_sr = $this->gettotalasset();
        $solvencyratio = $netasset_sr / $totalasset_sr * 100;

        return $solvencyratio;
    }

    public function solvencyratiostatus()
    {
        $solvencyratio_srs = $this->solvencyratio();
        $solvencyratiostatus = 'Good';

        if ($solvencyratio_srs > 20) {
            $solvencyratiostatus = 'Ideal';
        }
        elseif ($solvencyratio_srs >= 10 && $solvencyratio_srs <= 20) {
            $solvencyratiostatus = 'Warning';
        }
        elseif ($solvencyratio_srs >= 0 && $solvencyratio_srs <= 10) {
            $solvencyratiostatus = 'Danger';
        }
        elseif ($solvencyratio_srs < 0) {
            $solvencyratiostatus = 'Catasthropic';
        }

        return $solvencyratiostatus;
    }

    public function srsdesc()
    {
        $solvencyratio_srs = $this->solvencyratio();
        $srsdesc = 'Good';

        if ($solvencyratio_srs > 20) {
            $srsdesc = 'can pay all of your debts at once confidently';
        }
        elseif ($solvencyratio_srs >= 10 && $solvencyratio_srs <= 20) {
            $srsdesc = 'can pay all of your debts at once with caution';
        }
        elseif ($solvencyratio_srs >= 0 && $solvencyratio_srs <= 10) {
            $srsdesc = 'have to think twice before paying all of your debts at once';
        }
        elseif ($solvencyratio_srs < 0) {
            $srsdesc = 'absolutely can\'t pay all of your debts at once';
        }

        return $srsdesc;
    }

    public function srsuggest()
    {
        $solvencyratio_srsug = $this->solvencyratio();
        $srsuggest = 'Suggest';

        if ($solvencyratio_srsug > 20) {
            $srsuggest = 'Just pay all your debts if you want.';
        }
        elseif ($solvencyratio_srsug >= 10 && $solvencyratio_srsug <= 20) {
            $srsuggest = 'Just pay some of your debts at once if you want.';
        }
        elseif ($solvencyratio_srsug >= 0 && $solvencyratio_srsug <= 10) {
            $srsuggest = 'Keep paying your debts one by one';
        }
        elseif ($solvencyratio_srsug < 0) {
            $srsuggest = 'You have to increase your assets immediately!';
        }

        return $srsuggest;
    }

    // Bridge to View
    public function insightview ()
    {
        $totaldebtsd = $this->sumdebt();
        $remainingdebt = $this->remainingdebt();
        $debtratio = $this->debtratio();
        $debtratiostatus = $this->debtratiostatus();
        $liqratio = $this->liquidityratio();
        $daytoliquid = $this->daytoliquid();
        $liqratiostatus = $this->liqratiostatus();
        $liqsuggest = $this->dayliqsuggest();
        $totalasset = $this->gettotalasset();
        $netasset = $this->netasset();
        $solvencyratio = $this->solvencyratio();
        $solvencyratiostatus = $this->solvencyratiostatus();
        $srsdesc = $this->srsdesc();
        $srsuggest = $this->srsuggest();
        $gettotalasset = $this->gettotalasset();
        $getliquidasset = $this->getliquidasset();
        return view('insight')->with(['totaldebt' => $totaldebtsd, 'remainingdebt' => $remainingdebt, 'debtratio' => $debtratio, 'debtratiostatus' => $debtratiostatus, 'liquidityratio' => $liqratio, 'daytoliquid' => $daytoliquid, 'liqratiostatus' => $liqratiostatus, 'liqsuggest' => $liqsuggest, 'totalasset' => $totalasset, 'netasset' => $netasset, 'solvencyratio' => $solvencyratio, 'solvencyratiostatus' => $solvencyratiostatus, 'srsdesc' => $srsdesc, 'srsuggest' => $srsuggest, 'gettotalasset' => $gettotalasset, 'getliquidasset' => $getliquidasset]);
    }
}
