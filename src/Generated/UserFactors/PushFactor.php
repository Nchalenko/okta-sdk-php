<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\UserFactors;

use Okta\Resource\AbstractResource;

class PushFactor extends AbstractResource
{
    const PROFILE = 'profile';

    /**
     * Get the profile.
     *
     * @return \Okta\UserFactors\PushFactorProfile
     */
    public function getProfile(array $options = []): \Okta\UserFactors\PushFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactors\PushFactorProfile::class,
            $options
        );
    }

    /**
     * Set the profile.
     *
     * @param PushFactorProfile $profile The PushFactorProfile instance.
     * @return self
     */
    public function setProfile(PushFactorProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
        
        return $this;
    }
}
