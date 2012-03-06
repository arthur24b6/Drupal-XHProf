<?php
//  Copyright (c) 2009 Facebook
//
//  Licensed under the Apache License, Version 2.0 (the "License");
//  you may not use this file except in compliance with the License.
//  You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
//
//  Unless required by applicable law or agreed to in writing, software
//  distributed under the License is distributed on an "AS IS" BASIS,
//  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//  See the License for the specific language governing permissions and
//  limitations under the License.
//

/**
 *
 * A callgraph generator for XHProf.
 *
 * * This file is part of the UI/reporting component,
 *   used for viewing results of XHProf runs from a
 *   browser.
 *
 * Modification History:
 *  02/15/2008 - cjiang  - The first version of callgraph visualizer
 *                         based on Graphviz's DOT tool.
 *
 * @author Changhao Jiang (cjiang@facebook.com)
 */

// by default assume that xhprof_html & xhprof_lib directories
// are at the same level.
$GLOBALS['XHPROF_LIB_ROOT'] = dirname(__FILE__) . '/xhprof_lib';

include_once $GLOBALS['XHPROF_LIB_ROOT'].'/utils/callgraph_utils.php';
include_once $GLOBALS['XHPROF_LIB_ROOT'].'/utils/xhprof_runs.php';

ini_set('max_execution_time', 100);

$xhprof_runs_impl = new XHProfRuns_Default();
print_r($source);
print_r($id);
xhprof_render_image($xhprof_runs_impl, $id, 'jpg', 0.5, NULL, $source, FALSE);
