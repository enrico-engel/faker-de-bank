<?php namespace Faker\Provider;

use Faker\Factory;

class BankAccounts extends Base {

    protected static $banks = array(
        ['1822direkt', 'www.1822direkt.de'], 
        ['Aachener Bank', 'www.aachener-bank.de'],
        ['akf bank', 'www.akf.de'], 
        ['Alior Bank', 'www.aliorbank.pl/en'], 
        ['apoBank', 'www.apobank.de'], 
        ['Auxmoney', 'www.auxmoney.com'], 
        ['Bank für Kirche & Caritas', 'www.bkc-paderborn.de'], 
        ['Bank für Sozialwirtschaft', 'www.sozialbank.de'], 
        ['Bank im Bistum Essen', 'www.bibessen.de'], 
        ['Bank of Scotland', 'www.bankofscotland.de'], 
        ['Barclaycard', 'www2.barclaycard.de'], 
        ['BBBank', 'www.bbbank.de'], 
        ['BHW Bausparkasse', 'www.bhw.de'], 
        ['BMW Bank', 'www.bmwbank.de'], 
        ['Comdirect', 'www.comdirect.de'], 
        ['Commerzbank', 'www.commerzbank.de'], 
        ['Consorsbank', 'www.consorsbank.de'], 
        ['Credit Europe Bank', 'www.crediteurope.de'], 
        ['CreditPlus Bank', 'www.creditplus.de'], 
        ['DAB Bank', 'b2b.dab-bank.de'], 
        ['Debeka', 'www.debeka.de'], 
        ['Degussa Bank', 'www.degussa-bank.de'], 
        ['Deutsche Bank', 'www.deutsche-bank.de'], 
        ['Deutsche Kreditbank', 'www.dkb.de'], 
        ['DHB Bank', 'www.dhbbank.de'], 
        ['DSL Bank', 'www.dslbank.de'], 
        ['easyCredit', 'www.easycredit.de'], 
        ['Fidor Bank', 'www.fidor.de'], 
        ['Garantibank', 'www.garantibank.de'], 
        ['GE Capital Bank', 'www.ge.com'], 
        ['GEFA Bank', 'www.gefa-bank.de'], 
        ['GLS Bank', 'www.gls.de'], 
        ['Hanseatic Bank', 'www.hanseaticbank.de'], 
        ['HypoVereinsbank', 'www.hypovereinsbank.de'], 
        ['IKB', 'www.ikb.de'], 
        ['ING-DiBa', 'www.ing.de'], 
        ['Interhyp', 'baufi.interhyp.de'], 
        ['Klarna', 'www.klarna.com'], 
        ['LeasePlan Bank', 'www.leaseplanbank.de'], 
        ['Mercedes-Benz Bank', 'www.mercedes-benz-bank.de'], 
        ['MoneYou', 'www.moneyou.de'], 
        ['N26', 'n26.com'], 
        ['netbank', 'www.netbank.de'], 
        ['Net-m Privatbankn', 'www.privatbank1891.com'], 
        ['norisbank', 'www.norisbank.de'], 
        ['Oyak Anker Bank', 'www.oyakankerbank.de'], 
        ['pbb direkt', 'www.pbbdirekt.com'], 
        ['Postbank', 'www.postbank.de'], 
        ['PSD Bank', 'www.psd-bank.de'], 
        ['Renault Bank', 'www.renault-bank-direkt.de'], 
        ['Santander', 'www.santander.de'], 
        ['SEB', 'seb.de'], 
        ['SKG Bank', 'kredit.skgbank.de'], 
        ['Sparkassen-Finanzgruppe', 'www.sparkasse.de'], 
        ['Sutor Bank', 'www.sutorbank.de'], 
        ['SWK Bank', 'www.swkbank.de'], 
        ['Targobank', 'www.targobank.de'], 
        ['Volkswagen Bank', 'www.vwfs.de'], 
        ['VTB Direktbank', 'www.vtbdirekt.de'],
        ['Wüstenrot Bank', 'www.wuestenrot.de']
    );

    protected static $accountType = array(
        'Girokonto', 
        'Tagesgeldkonto', 
        'Tagesgeld PLUS-Konto', 
        'Verrechnungskonto', 
        'Festgeldkonto', 
        'Sparkonto', 
        'Depot', 
        'Kreditkarten­konto', 
        'Baufinanziernugskonto', 
        'KfW-Darlehen'
    );

    /**
     * @return string
     * @example 'Postbank'
     */
    public function bank() {

        return static::randomElement(static::$banks)[0];
    }

    /**
     * @param string $bank name
     * @return string
     * @example 'www.postbank.de'
     */
    public function bankWebsite($bank) {

        foreach(static::$banks as $bankItem) {
            if ($bankItem[0] == $bank) {
                return $bankItem[1];
            }
        }

        return "wwww.".$bank.".de";

    }

    /**
     * @return string
     * @example 'Tagesgeldkonto'
     */
    public function accountType() {

        return static::randomElement(static::$accountType);
    }
}

?>