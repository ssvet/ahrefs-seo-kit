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
class Google_Service_AnalyticsData_QuotaStatus extends \ahrefs\AhrefsSeoKit\Google_Model
{
    public $consumed;
    public $remaining;
    public function setConsumed($consumed)
    {
        $this->consumed = $consumed;
    }
    public function getConsumed()
    {
        return $this->consumed;
    }
    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;
    }
    public function getRemaining()
    {
        return $this->remaining;
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
\class_alias('ahrefs\\AhrefsSeoKit\\Google_Service_AnalyticsData_QuotaStatus', 'Google_Service_AnalyticsData_QuotaStatus', \false);