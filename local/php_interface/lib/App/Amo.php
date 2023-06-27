<?
// new \App\Amo();
namespace App {
    class Amo {
        
        const CLIENT_ID='';
        const CLIENT_SECRET='';
        const REDIRECT_URL='https://decoart.pro/';
        
        private $client;
        
        public function __construct ()
        {
            $this->client = new \AmoCRM\Client\AmoCRMApiClient(
                    self::CLIENT_ID, self::CLIENT_SECRET, self::REDIRECT_URL
                );
            
            
            
        }
        
        
        
        
    }
}