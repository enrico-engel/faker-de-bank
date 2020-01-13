<?php namespace Faker\Provider;

use Faker\Factory;

class BankAccounts extends Base {

    protected static $banks = array(
        '1822direkt', 'Aachener Bank', 'akf bank', 'Alior Bank', 'apoBank', 'Auxmoney', 
        'Bank für Kirche & Caritas', 'Bank für Sozialwirtschaft', 'Bank im Bistum Essen', 
        'Bank of Scotland', 'Barclaycard', 'BBBank', 'BHW Bausparkasse', 'BMW Bank', 'Comdirect', 
        'Commerzbank', 'Consorsbank', 'Credit Europe Bank', 'CreditPlus Bank', 'DAB Bank', 'Debeka', 
        'Degussa Bank', 'Deutsche Bank', 'Deutsche Kreditbank', 'DHB Bank', 'DSL Bank', 'easyCredit', 
        'Fidor Bank', 'Garantibank', 'GE Capital Bank', 'GEFA Bank', 'GLS Bank', 'Hanseatic Bank', 
        'HypoVereinsbank', 'IKB', 'ING-DiBa', 'Interhyp', 'Klarna', 'LeasePlan Bank', 'Mercedes-Benz Bank', 
        'MoneYou', 'N26', 'netbank', 'Net-m Privatbankn', 'orisbank', 'Oyak Anker Bank', 'pbb direkt', 
        'Postbank', 'PSD Bank', 'Renault Bank', 'Santander', 'SEB', 'SKG Bank', 'Sparkassen-Finanzgruppe', 
        'Sutor Bank', 'SWK Bank', 'Targobank', 'Volkswagen Bank', 'VTB Direktbank','Wüstenrot Bank'
    );

    protected static $accountType = array(
        'Girokonto', 'Tagesgeldkonto', 'Tagesgeld PLUS-Konto', 'Verrechnungskonto', 'Festgeldkonto', 'Sparkonto', 'Depot', 
        'Kreditkarten­konto', 'Baufinanziernugskonto', 'KfW-Darlehen'
    );

    public function bank() {

        return static::randomElement(static::$banks);
    }

    public function accountType() {

        return static::randomElement(static::$accountType);
    }
}

?>