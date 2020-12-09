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
class Google_Service_AnalyticsData_PivotSelection extends \ahrefs\AhrefsSeoKit\Google_Model
{
    public $dimensionName;
    public $dimensionValue;
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }
    public function getDimensionName()
    {
        return $this->dimensionName;
    }
    public function setDimensionValue($dimensionValue)
    {
        $this->dimensionValue = $dimensionValue;
    }
    public function getDimensionValue()
    {
        return $this->dimensionValue;
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
\class_alias('ahrefs\\AhrefsSeoKit\\Google_Service_AnalyticsData_PivotSelection', 'Google_Service_AnalyticsData_PivotSelection', \false);
