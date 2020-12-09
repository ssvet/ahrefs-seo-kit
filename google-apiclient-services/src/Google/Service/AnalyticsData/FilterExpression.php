<?php

namespace ahrefs\AhrefsSeoKit;

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
/* Modified by Ahrefs. ahrefs\AhrefsSeoKit namespace applied. */
class Google_Service_AnalyticsData_FilterExpression extends \ahrefs\AhrefsSeoKit\Google_Model
{
    protected $andGroupType = 'Google_Service_AnalyticsData_FilterExpressionList';
    protected $andGroupDataType = '';
    protected $filterType = 'Google_Service_AnalyticsData_Filter';
    protected $filterDataType = '';
    protected $notExpressionType = 'Google_Service_AnalyticsData_FilterExpression';
    protected $notExpressionDataType = '';
    protected $orGroupType = 'Google_Service_AnalyticsData_FilterExpressionList';
    protected $orGroupDataType = '';
    /**
     * @param Google_Service_AnalyticsData_FilterExpressionList
     */
    public function setAndGroup(\ahrefs\AhrefsSeoKit\Google_Service_AnalyticsData_FilterExpressionList $andGroup)
    {
        $this->andGroup = $andGroup;
    }
    /**
     * @return Google_Service_AnalyticsData_FilterExpressionList
     */
    public function getAndGroup()
    {
        return $this->andGroup;
    }
    /**
     * @param Google_Service_AnalyticsData_Filter
     */
    public function setFilter(\ahrefs\AhrefsSeoKit\Google_Service_AnalyticsData_Filter $filter)
    {
        $this->filter = $filter;
    }
    /**
     * @return Google_Service_AnalyticsData_Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * @param Google_Service_AnalyticsData_FilterExpression
     */
    public function setNotExpression(\ahrefs\AhrefsSeoKit\Google_Service_AnalyticsData_FilterExpression $notExpression)
    {
        $this->notExpression = $notExpression;
    }
    /**
     * @return Google_Service_AnalyticsData_FilterExpression
     */
    public function getNotExpression()
    {
        return $this->notExpression;
    }
    /**
     * @param Google_Service_AnalyticsData_FilterExpressionList
     */
    public function setOrGroup(\ahrefs\AhrefsSeoKit\Google_Service_AnalyticsData_FilterExpressionList $orGroup)
    {
        $this->orGroup = $orGroup;
    }
    /**
     * @return Google_Service_AnalyticsData_FilterExpressionList
     */
    public function getOrGroup()
    {
        return $this->orGroup;
    }
}
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
\class_alias('ahrefs\\AhrefsSeoKit\\Google_Service_AnalyticsData_FilterExpression', 'Google_Service_AnalyticsData_FilterExpression', \false);
