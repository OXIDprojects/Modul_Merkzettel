<?php

class merkzettel extends merkzettel_parent
{ 
 
    protected function _updateNoticeList( $aArticleList, $oUser )
    {
        // loading users notice list ..
        if ( $oUserBasket = $oUser->getBasket( 'noticelist' ) ) {
            // only if wishlist is enabled
            foreach ( $aArticleList as $oContent) {
                $sProdId = $oContent->getProductId();

                // updating users notice list
                $oUserBasketItem = $oUserBasket->getItem( $sProdId, $oContent->getSelList(), $oContent->getPersParams() );
                $dNewAmount = $oUserBasketItem->oxuserbasketitems__oxamount->value - $oContent->getAmount();
                if ( $dNewAmount < 0) {
                    $dNewAmount = 0;
                }
                
            }
        }
    }
    
}    