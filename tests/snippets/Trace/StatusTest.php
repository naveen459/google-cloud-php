<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Tests\Snippets\Trace;

use Google\Cloud\Core\Testing\Snippet\SnippetTestCase;
use Google\Cloud\Trace\Status;
use Prophecy\Argument;

/**
 * @group trace
 */
class StatusTest extends SnippetTestCase
{
    public function testClass()
    {
        $snippet = $this->snippetFromClass(Status::class);
        $res = $snippet->invoke('status');
        $this->assertInstanceOf(Status::class, $res->returnVal());
    }
}