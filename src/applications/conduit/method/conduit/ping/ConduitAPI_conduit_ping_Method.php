<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class ConduitAPI_conduit_ping_Method extends ConduitAPIMethod {

  public function shouldRequireAuthentication() {
    return false;
  }

  public function getMethodDescription() {
    return "Basic ping for monitoring or a health-check.";
  }

  public function defineParamTypes() {
    return array();
  }

  public function defineReturnType() {
    return 'string';
  }

  public function defineErrorTypes() {
    return array();
  }

  protected function execute(ConduitAPIRequest $request) {
    return php_uname('n');
  }
}
