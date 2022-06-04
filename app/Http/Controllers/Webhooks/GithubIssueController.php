<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class GithubIssueController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'action' => [
                'required',
                'string',
                Rule::in(['opened'])
            ],
            'issue' => [
                'required',
                'array'
            ],
            'sender' => [
                'required',
                'array',
            ]
        ]);

        $githubUser = $request->input('sender');
        $githubIssue = $request->input('issue');

        // TODO
    }
}
