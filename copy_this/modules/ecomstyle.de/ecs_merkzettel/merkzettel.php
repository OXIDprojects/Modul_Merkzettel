<?php
/*    Please retain this copyright header in all versions of the software
*
*    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
*
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see {http://www.gnu.org/licenses/}.
*/
class merkzettel extends merkzettel_parent
{
	protected function _updateNoticeList($aArticleList, $oUser)
	{
	// loading users notice list ..
		if ($oUserBasket = $oUser->getBasket('noticelist'))
		{
		// only if wishlist is enabled
			foreach ($aArticleList as $oContent)
			{
				$sProdId = $oContent->getProductId();
				// updating users notice list
				$oUserBasketItem = $oUserBasket->getItem($sProdId, $oContent->getSelList(), $oContent->getPersParams());
				$dNewAmount = $oUserBasketItem->oxuserbasketitems__oxamount->value - $oContent->getAmount();
				if ($dNewAmount < 0)
				{
					$dNewAmount = 0;
				}
			}
		}
	}
}