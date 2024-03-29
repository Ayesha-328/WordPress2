<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class LiasettingsGetAccessibleGmbAccountsResponse extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Collection
{
  protected $collection_key = 'gmbAccounts';
  /**
   * @var string
   */
  public $accountId;
  /**
   * @var GmbAccountsGmbAccount[]
   */
  public $gmbAccounts;
  protected $gmbAccountsType = GmbAccountsGmbAccount::class;
  protected $gmbAccountsDataType = 'array';
  /**
   * @var string
   */
  public $kind;

  /**
   * @param string
   */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /**
   * @return string
   */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /**
   * @param GmbAccountsGmbAccount[]
   */
  public function setGmbAccounts($gmbAccounts)
  {
    $this->gmbAccounts = $gmbAccounts;
  }
  /**
   * @return GmbAccountsGmbAccount[]
   */
  public function getGmbAccounts()
  {
    return $this->gmbAccounts;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LiasettingsGetAccessibleGmbAccountsResponse::class, 'Google_Service_ShoppingContent_LiasettingsGetAccessibleGmbAccountsResponse');
