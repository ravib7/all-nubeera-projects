<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Git Docs</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Git Docs">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">

    <!-- FontAwesome JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../boto_topics.css">

    <style>
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        ul.breadcrumb li a:hover {

            text-decoration: underline;
        }

        ul#lists {
            width: 100%;
            position: absolute;
            background: white;
            box-shadow: 1px 1px 10px gray;
            height: auto;
            z-index: 1;
        }

        ul#lists li {
            display: none;
            width: 107%;
            z-index: 1;
            position: relative;
            left: -7%;
            cursor: pointer;

            font-size: 0.85rem;
            padding: 0.5rem 3rem 0.5rem 1.5rem;
            height: 2.4rem;
            line-height: 1.5;
            color: #919aaa;
        }

        ul#lists li:hover {
            background: gainsboro;
            padding-left: 1.6rem;
        }

        ul#lists li a {
            text-decoration: none;
            color: #919aaa;
        }

        .mic-btn {
            color: black;
            background: none;
            border: none;
            position: absolute;
            right: 3.5rem;
            top: 0.90rem;
            margin-right: 0;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .clear-btn {
            color: #828d9f;
            background: none;
            border: none;
            position: absolute;
            right: 6.8rem;
            top: 0.70rem;
            margin-right: 0;
        }

        button#clearBtn {
            display: none;
        }
    </style>

</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../templates/navbar.php';?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Distributed Git</strong><br><br>
                     <ul>
                     <li><a href="index.php">Distributed Workflows</a></li>
                     <li><a href="contributing-to-a-project.php">Contributing to a Project</a></li>
                     <li><a href="maintaining-a-project.php">Maintaining a Project</a></li>
                     </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Maintaining a Project</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Distributed Git</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">

In addition to knowing how to contribute effectively to a project, you’ll likely need to know how to maintain one.
This can consist of accepting and applying patches generated via <code>format-patch</code> and emailed to you, or integrating changes in remote branches for repositories you’ve added as remotes to your project.
Whether you maintain a canonical repository or want to help by verifying or approving patches, you need to know how to accept work in a way that is clearest for other contributors and sustainable by you over the long run.
</div>
<div class="sect3">
<h3 id="_working_in_topic_branches">Working in Topic Branches</h3>
<div class="paragraph">

When you’re thinking of integrating new work, it’s generally a good idea to try it out in a <em>topic branch</em>&thinsp;—&thinsp;a temporary branch specifically made to try out that new work.
This way, it’s easy to tweak a patch individually and leave it if it’s not working until you have time to come back to it.
If you create a simple branch name based on the theme of the work you’re going to try, such as <code>ruby_client</code> or something similarly descriptive, you can easily remember it if you have to abandon it for a while and come back later.
The maintainer of the Git project tends to namespace these branches as well&thinsp;—&thinsp;such as <code>sc/ruby_client</code>, where <code>sc</code> is short for the person who contributed the work.
As you’ll remember, you can create the branch based off your <code>master</code> branch like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch sc/ruby_client master</blockquote></pre>
</div>
</div>
<div class="paragraph">
Or, if you want to also switch to it immediately, you can use the <code>checkout -b</code> option:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b sc/ruby_client master</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now you’re ready to add the contributed work that you received into this topic branch and determine if you want to merge it into your longer-term branches.
</div>
</div>
<div class="sect3">
<h3 id="_patches_from_email">Applying Patches from Email</h3>
<div class="paragraph">

If you receive a patch over email that you need to integrate into your project, you need to apply the patch in your topic branch to evaluate it.
There are two ways to apply an emailed patch: with <code>git apply</code> or with <code>git am</code>.
</div>
<div class="sect4">
<h4 id="_applying_a_patch_with_apply">Applying a Patch with apply</h4>
<div class="paragraph">

If you received the patch from someone who generated it with <code>git diff</code> or some variation of the Unix <code>diff</code> command (which is not recommended; see the next section), you can apply it with the <code>git apply</code> command.
Assuming you saved the patch at <code>/tmp/patch-ruby-client.patch</code>, you can apply the patch like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git apply /tmp/patch-ruby-client.patch</blockquote></pre>
</div>
</div>
<div class="paragraph">
This modifies the files in your working directory.
It’s almost identical to running a <code>patch -p1</code> command to apply the patch, although it’s more paranoid and accepts fewer fuzzy matches than patch.
It also handles file adds, deletes, and renames if they’re described in the <code>git diff</code> format, which <code>patch</code> won’t do.
Finally, <code>git apply</code> is an “apply all or abort all” model where either everything is applied or nothing is, whereas <code>patch</code> can partially apply patchfiles, leaving your working directory in a weird state.
<code>git apply</code> is overall much more conservative than <code>patch</code>.
It won’t create a commit for you&thinsp;—&thinsp;after running it, you must stage and commit the changes introduced manually.
</div><br>
<div class="paragraph">
You can also use <code>git apply</code> to see if a patch applies cleanly before you try actually applying it&thinsp;—&thinsp;you can run <code>git apply --check</code> with the patch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git apply --check 0001-see-if-this-helps-the-gem.patch
error: patch failed: ticgit.gemspec:1
error: ticgit.gemspec: patch does not apply</blockquote></pre>
</div>
</div>
<div class="paragraph">
If there is no output, then the patch should apply cleanly.
This command also exits with a non-zero status if the check fails, so you can use it in scripts if you want.
</div>
</div>
<div class="sect4">
<h4 id="_git_am">Applying a Patch with <code>am</code>
</h4>
<div class="paragraph">

If the contributor is a Git user and was good enough to use the <code>format-patch</code> command to generate their patch, then your job is easier because the patch contains author information and a commit message for you.
If you can, encourage your contributors to use <code>format-patch</code> instead of <code>diff</code> to generate patches for you.
You should only have to use <code>git apply</code> for legacy patches and things like that.
</div><br>
<div class="paragraph">
To apply a patch generated by <code>format-patch</code>, you use <code>git am</code> (the command is named <code>am</code> as it is used to "apply a series of patches from a mailbox").
Technically, <code>git am</code> is built to read an mbox file, which is a simple, plain-text format for storing one or more email messages in one text file.
It looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">From 330090432754092d704da8e76ca5c05c198e71a8 Mon Sep 17 00:00:00 2001
From: Jessica Smith &lt;jessica@example.com&gt;
Date: Sun, 6 Apr 2008 10:17:23 -0700
Subject: [PATCH 1/2] Add limit to log function

Limit log functionality to the first 20</blockquote></pre>
</div>
</div>
<div class="paragraph">
This is the beginning of the output of the <code>git format-patch</code> command that you saw in the previous section; it also represents a valid mbox email format.
If someone has emailed you the patch properly using <code>git send-email</code>, and you download that into an mbox format, then you can point <code>git am</code> to that mbox file, and it will start applying all the patches it sees.
If you run a mail client that can save several emails out in mbox format, you can save entire patch series into a file and then use <code>git am</code> to apply them one at a time.
</div><br>
<div class="paragraph">
However, if someone uploaded a patch file generated via <code>git format-patch</code> to a ticketing system or something similar, you can save the file locally and then pass that file saved on your disk to <code>git am</code> to apply it:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git am 0001-limit-log-function.patch
Applying: Add limit to log function</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can see that it applied cleanly and automatically created the new commit for you.
The author information is taken from the email’s <code>From</code> and <code>Date</code> headers, and the message of the commit is taken from the <code>Subject</code> and body (before the patch) of the email.
For example, if this patch was applied from the mbox example above, the commit generated would look something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty=fuller -1
commit 6c5e70b984a60b3cecd395edd5b48a7575bf58e0
Author:     Jessica Smith &lt;jessica@example.com&gt;
AuthorDate: Sun Apr 6 10:17:23 2008 -0700
Commit:     Scott Chacon &lt;schacon@gmail.com&gt;
CommitDate: Thu Apr 9 09:19:06 2009 -0700

   Add limit to log function

   Limit log functionality to the first 20</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>Commit</code> information indicates the person who applied the patch and the time it was applied.
The <code>Author</code> information is the individual who originally created the patch and when it was originally created.
</div><br>
<div class="paragraph">
But it’s possible that the patch won’t apply cleanly.
Perhaps your main branch has diverged too far from the branch the patch was built from, or the patch depends on another patch you haven’t applied yet.
In that case, the <code>git am</code> process will fail and ask you what you want to do:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git am 0001-see-if-this-helps-the-gem.patch
Applying: See if this helps the gem
error: patch failed: ticgit.gemspec:1
error: ticgit.gemspec: patch does not apply
Patch failed at 0001.
When you have resolved this problem run "git am --resolved".
If you would prefer to skip this patch, instead run "git am --skip".
To restore the original branch and stop patching run "git am --abort".</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command puts conflict markers in any files it has issues with, much like a conflicted merge or rebase operation.
You solve this issue much the same way&thinsp;—&thinsp;edit the file to resolve the conflict, stage the new file, and then run <code>git am --resolved</code> to continue to the next patch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ (fix the file)
$ git add ticgit.gemspec
$ git am --resolved
Applying: See if this helps the gem</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you want Git to try a bit more intelligently to resolve the conflict, you can pass a <code>-3</code> option to it, which makes Git attempt a three-way merge.
This option isn’t on by default because it doesn’t work if the commit the patch says it was based on isn’t in your repository.
If you do have that commit&thinsp;—&thinsp;if the patch was based on a public commit&thinsp;—&thinsp;then the <code>-3</code> option is generally much smarter about applying a conflicting patch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git am -3 0001-see-if-this-helps-the-gem.patch
Applying: See if this helps the gem
error: patch failed: ticgit.gemspec:1
error: ticgit.gemspec: patch does not apply
Using index info to reconstruct a base tree...
Falling back to patching base and 3-way merge...
No changes -- Patch already applied.</blockquote></pre>
</div>
</div>
<div class="paragraph">
In this case, without the <code>-3</code> option the patch would have been considered as a conflict.
Since the <code>-3</code> option was used the patch applied cleanly.
</div><br>
<div class="paragraph">
If you’re applying a number of patches from an mbox, you can also run the <code>am</code> command in interactive mode, which stops at each patch it finds and asks if you want to apply it:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git am -3 -i mbox
Commit Body is:
--------------------------
See if this helps the gem
--------------------------
Apply? [y]es/[n]o/[e]dit/[v]iew patch/[a]ccept all</blockquote></pre>
</div>
</div>
<div class="paragraph">
This is nice if you have a number of patches saved, because you can view the patch first if you don’t remember what it is, or not apply the patch if you’ve already done so.
</div><br>
<div class="paragraph">
When all the patches for your topic are applied and committed into your branch, you can choose whether and how to integrate them into a longer-running branch.
</div>
</div>
</div>
<div class="sect3">
<h3 id="_checking_out_remotes">Checking Out Remote Branches</h3>
<div class="paragraph">

If your contribution came from a Git user who set up their own repository, pushed a number of changes into it, and then sent you the URL to the repository and the name of the remote branch the changes are in, you can add them as a remote and do merges locally.
</div><br>
<div class="paragraph">
For instance, if Jessica sends you an email saying that she has a great new feature in the <code>ruby-client</code> branch of her repository, you can test it by adding the remote and checking out that branch locally:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add jessica git://github.com/jessica/myproject.git
$ git fetch jessica
$ git checkout -b rubyclient jessica/ruby-client</blockquote></pre>
</div>
</div>
<div class="paragraph">
If she emails you again later with another branch containing another great feature, you could directly <code>fetch</code> and <code>checkout</code> because you already have the remote setup.
</div><br>
<div class="paragraph">
This is most useful if you’re working with a person consistently.
If someone only has a single patch to contribute once in a while, then accepting it over email may be less time consuming than requiring everyone to run their own server and having to continually add and remove remotes to get a few patches.
You’re also unlikely to want to have hundreds of remotes, each for someone who contributes only a patch or two.
However, scripts and hosted services may make this easier&thinsp;—&thinsp;it depends largely on how you develop and how your contributors develop.
</div><br>
<div class="paragraph">
The other advantage of this approach is that you get the history of the commits as well.
Although you may have legitimate merge issues, you know where in your history their work is based; a proper three-way merge is the default rather than having to supply a <code>-3</code> and hope the patch was generated off a public commit to which you have access.
</div><br>
<div class="paragraph">
If you aren’t working with a person consistently but still want to pull from them in this way, you can provide the URL of the remote repository to the <code>git pull</code> command.
This does a one-time pull and doesn’t save the URL as a remote reference:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git pull https://github.com/onetimeguy/project
From https://github.com/onetimeguy/project
 * branch            HEAD       -&gt; FETCH_HEAD
Merge made by the 'recursive' strategy.</blockquote></pre>
</div>
</div>
</div>
<div class="sect3">
<h3 id="_what_is_introduced">Determining What Is Introduced</h3>
<div class="paragraph">

Now you have a topic branch that contains contributed work.
At this point, you can determine what you’d like to do with it.
This section revisits a couple of commands so you can see how you can use them to review exactly what you’ll be introducing if you merge this into your main branch.
</div><br>
<div class="paragraph">
It’s often helpful to get a review of all the commits that are in this branch but that aren’t in your <code>master</code> branch.
You can exclude commits in the <code>master</code> branch by adding the <code>--not</code> option before the branch name.
This does the same thing as the <code>master..contrib</code> format that we used earlier.
For example, if your contributor sends you two patches and you create a branch called <code>contrib</code> and applied those patches there, you can run this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log contrib --not master
commit 5b6235bd297351589efc4d73316f0a68d484f118
Author: Scott Chacon &lt;schacon@gmail.com&gt;
Date:   Fri Oct 24 09:53:59 2008 -0700

    See if this helps the gem

commit 7482e0d16d04bea79d0dba8988cc78df655f16a0
Author: Scott Chacon &lt;schacon@gmail.com&gt;
Date:   Mon Oct 22 19:38:36 2008 -0700

    Update gemspec to hopefully work better</blockquote></pre>
</div>
</div>
<div class="paragraph">
To see what changes each commit introduces, remember that you can pass the <code>-p</code> option to <code>git log</code> and it will append the diff introduced to each commit.
</div><br>
<div class="paragraph">
To see a full diff of what would happen if you were to merge this topic branch with another branch, you may have to use a weird trick to get the correct results.
You may think to run this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff master</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command gives you a diff, but it may be misleading.
If your <code>master</code> branch has moved forward since you created the topic branch from it, then you’ll get seemingly strange results.
This happens because Git directly compares the snapshots of the last commit of the topic branch you’re on and the snapshot of the last commit on the <code>master</code> branch.
For example, if you’ve added a line in a file on the <code>master</code> branch, a direct comparison of the snapshots will look like the topic branch is going to remove that line.
</div><br>
<div class="paragraph">
If <code>master</code> is a direct ancestor of your topic branch, this isn’t a problem; but if the two histories have diverged, the diff will look like you’re adding all the new stuff in your topic branch and removing everything unique to the <code>master</code> branch.
</div><br>
<div class="paragraph">
What you really want to see are the changes added to the topic branch&thinsp;—&thinsp;the work you’ll introduce if you merge this branch with <code>master</code>.
You do that by having Git compare the last commit on your topic branch with the first common ancestor it has with the <code>master</code> branch.
</div><br>
<div class="paragraph">
Technically, you can do that by explicitly figuring out the common ancestor and then running your diff on it:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge-base contrib master
36c7dba2c95e6bbb78dfa822519ecfec6e1ca649
$ git diff 36c7db</blockquote></pre>
</div>
</div>
<div class="paragraph">
or, more concisely:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff $(git merge-base contrib master)</blockquote></pre>
</div>
</div>
<div class="paragraph">
However, neither of those is particularly convenient, so Git provides another shorthand for doing the same thing: the triple-dot syntax.
In the context of the <code>git diff</code> command, you can put three periods after another branch to do a <code>diff</code> between the last commit of the branch you’re on and its common ancestor with another branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff master...contrib</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command shows you only the work your current topic branch has introduced since its common ancestor with <code>master</code>.
That is a very useful syntax to remember.
</div>
</div>
<div class="sect3">
<h3 id="_integrating_contributed_work">Integrating Contributed Work</h3>
<div class="paragraph">

When all the work in your topic branch is ready to be integrated into a more mainline branch, the question is how to do it.
Furthermore, what overall workflow do you want to use to maintain your project?
You have a number of choices, so we’ll cover a few of them.
</div>
<div class="sect4">
<h4 id="_merging_workflows">Merging Workflows</h4>
<div class="paragraph">

One basic workflow is to simply merge all that work directly into your <code>master</code> branch.
In this scenario, you have a <code>master</code> branch that contains basically stable code.
When you have work in a topic branch that you think you’ve completed, or work that someone else has contributed and you’ve verified, you merge it into your master branch, delete that just-merged topic branch, and repeat.
</div><br>
<div class="paragraph">
For instance, if we have a repository with work in two branches named <code>ruby_client</code> and <code>php_client</code> that looks like History with several topic branches, and we merge <code>ruby_client</code> followed by <code>php_client</code>, your history will end up looking like After a topic branch merge.
</div>
<div id="merwf_a" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/merging-workflows-1.png" alt="History with several topic branches">
</div>
<div class="title">Figure 72. History with several topic branches</div>
</div><br><br>
<div id="merwf_b" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/merging-workflows-2.png" alt="After a topic branch merge">
</div>
<div class="title">Figure 73. After a topic branch merge</div>
</div><br><br>
<div class="paragraph">
That is probably the simplest workflow, but it can possibly be problematic if you’re dealing with larger or more stable projects where you want to be really careful about what you introduce.
</div><br>
<div class="paragraph">
If you have a more important project, you might want to use a two-phase merge cycle.
In this scenario, you have two long-running branches, <code>master</code> and <code>develop</code>, in which you determine that <code>master</code> is updated only when a very stable release is cut and all new code is integrated into the <code>develop</code> branch.
You regularly push both of these branches to the public repository.
Each time you have a new topic branch to merge in (Before a topic branch merge), you merge it into <code>develop</code> (After a topic branch merge); then, when you tag a release, you fast-forward <code>master</code> to wherever the now-stable <code>develop</code> branch is (After a project release).
</div>
<div id="merwf_c" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/merging-workflows-3.png" alt="Before a topic branch merge">
</div>
<div class="title">Figure 74. Before a topic branch merge</div>
</div><br><br>
<div id="merwf_d" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/merging-workflows-4.png" alt="After a topic branch merge">
</div>
<div class="title">Figure 75. After a topic branch merge</div>
</div><br><br>
<div id="merwf_e" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/merging-workflows-5.png" alt="After a topic branch release">
</div>
<div class="title">Figure 76. After a project release</div>
</div><br><br>
<div class="paragraph">
This way, when people clone your project’s repository, they can either check out <code>master</code> to build the latest stable version and keep up to date on that easily, or they can check out <code>develop</code>, which is the more cutting-edge content.
You can also extend this concept by having an <code>integrate</code> branch where all the work is merged together.
Then, when the codebase on that branch is stable and passes tests, you merge it into a <code>develop</code> branch; and when that has proven itself stable for a while, you fast-forward your <code>master</code> branch.
</div>
</div>
<div class="sect4">
<h4 id="_large_merging_workflows">Large-Merging Workflows</h4>
<div class="paragraph">

The Git project has four long-running branches: <code>master</code>, <code>next</code>, and <code>seen</code> (formerly 'pu'&thinsp;—&thinsp;proposed updates) for new work, and <code>maint</code> for maintenance backports.
When new work is introduced by contributors, it’s collected into topic branches in the maintainer’s repository in a manner similar to what we’ve described .
At this point, the topics are evaluated to determine whether they’re safe and ready for consumption or whether they need more work.
If they’re safe, they’re merged into <code>next</code>, and that branch is pushed up so everyone can try the topics integrated together.
</div>
<div id="merwf_f" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/large-merges-1.png" alt="Managing a complex series of parallel contributed topic branches">
</div>
<div class="title">Figure 77. Managing a complex series of parallel contributed topic branches</div>
</div><br><br>
<div class="paragraph">
If the topics still need work, they’re merged into <code>seen</code> instead.
When it’s determined that they’re totally stable, the topics are re-merged into <code>master</code>.
The <code>next</code> and <code>seen</code> branches are then rebuilt from the <code>master</code>.
This means <code>master</code> almost always moves forward, <code>next</code> is rebased occasionally, and <code>seen</code> is rebased even more often:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/large-merges-2.png" alt="Merging contributed topic branches into long-term integration branches">
</div>
<div class="title">Figure 78. Merging contributed topic branches into long-term integration branches</div>
</div><br><br>
<div class="paragraph">
When a topic branch has finally been merged into <code>master</code>, it’s removed from the repository.
The Git project also has a <code>maint</code> branch that is forked off from the last release to provide backported patches in case a maintenance release is required.
Thus, when you clone the Git repository, you have four branches that you can check out to evaluate the project in different stages of development, depending on how cutting edge you want to be or how you want to contribute; and the maintainer has a structured workflow to help them vet new contributions.
The Git project’s workflow is specialized.
</div>
</div>
<div class="sect4">
<h4 id="_rebase_cherry_pick">Rebasing and Cherry-Picking Workflows</h4>
<div class="paragraph">

Other maintainers prefer to rebase or cherry-pick contributed work on top of their <code>master</code> branch, rather than merging it in, to keep a mostly linear history.
When you have work in a topic branch and have determined that you want to integrate it, you move to that branch and run the rebase command to rebuild the changes on top of your current <code>master</code> (or <code>develop</code>, and so on) branch.
If that works well, you can fast-forward your <code>master</code> branch, and you’ll end up with a linear project history.
</div><br>
<div class="paragraph">

The other way to move introduced work from one branch to another is to cherry-pick it.
A cherry-pick in Git is like a rebase for a single commit.
It takes the patch that was introduced in a commit and tries to reapply it on the branch you’re currently on.
This is useful if you have a number of commits on a topic branch and you want to integrate only one of them, or if you only have one commit on a topic branch and you’d prefer to cherry-pick it rather than run rebase.
For example, suppose you have a project that looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/rebasing-1.png" alt="Example history before a cherry-pick">
</div>
<div class="title">Figure 79. Example history before a cherry-pick</div>
</div><br><br>
<div class="paragraph">
If you want to pull commit <code>e43a6</code> into your <code>master</code> branch, you can run:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git cherry-pick e43a6
Finished one cherry-pick.
[master]: created a0a41a9: "More friendly message when locking the index fails."
 3 files changed, 17 insertions(+), 3 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
This pulls the same change introduced in <code>e43a6</code>, but you get a new commit SHA-1 value, because the date applied is different.
Now your history looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/rebasing-2.png" alt="History after cherry-picking a commit on a topic branch">
</div>
<div class="title">Figure 80. History after cherry-picking a commit on a topic branch</div>
</div><br><br>
<div class="paragraph">
Now you can remove your topic branch and drop the commits you didn’t want to pull in.
</div>
</div>
<div class="sect4">
<h4 id="_rerere">Rerere</h4>
<div class="paragraph">

If you’re doing lots of merging and rebasing, or you’re maintaining a long-lived topic branch, Git has a feature called “rerere” that can help.
</div><br>
<div class="paragraph">
Rerere stands for “reuse recorded resolution”&thinsp;—&thinsp;it’s a way of shortcutting manual conflict resolution.
When rerere is enabled, Git will keep a set of pre- and post-images from successful merges, and if it notices that there’s a conflict that looks exactly like one you’ve already fixed, it’ll just use the fix from last time, without bothering you with it.
</div><br>
<div class="paragraph">
This feature comes in two parts: a configuration setting and a command.
The configuration setting is <code>rerere.enabled</code>, and it’s handy enough to put in your global config:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global rerere.enabled true</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now, whenever you do a merge that resolves conflicts, the resolution will be recorded in the cache in case you need it in the future.
</div><br>  
<div class="paragraph">
If you need to, you can interact with the rerere cache using the <code>git rerere</code> command.
When it’s invoked alone, Git checks its database of resolutions and tries to find a match with any current merge conflicts and resolve them (although this is done automatically if <code>rerere.enabled</code> is set to <code>true</code>).
There are also subcommands to see what will be recorded, to erase specific resolution from the cache, and to clear the entire cache.
</div>
</div>
</div>
<div class="sect3">
<h3 id="_tagging_releases">Tagging Your Releases</h3>
<div class="paragraph">

When you’ve decided to cut a release, you’ll probably want to assign a tag so you can re-create that release at any point going forward.
You can create a new tag as discussed in <a href="../02GitBasics/">Git Basics</a>.
If you decide to sign the tag as the maintainer, the tagging may look something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -s v1.5 -m 'my signed 1.5 tag'
You need a passphrase to unlock the secret key for
user: "Scott Chacon &lt;schacon@gmail.com&gt;"
1024-bit DSA key, ID F721C45A, created 2009-02-09</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you do sign your tags, you may have the problem of distributing the public PGP key used to sign your tags.
The maintainer of the Git project has solved this issue by including their public key as a blob in the repository and then adding a tag that points directly to that content.
To do this, you can figure out which key you want by running <code>gpg --list-keys</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ gpg --list-keys
/Users/schacon/.gnupg/pubring.gpg
---------------------------------
pub   1024D/F721C45A 2009-02-09 [expires: 2010-02-09]
uid                  Scott Chacon &lt;schacon@gmail.com&gt;
sub   2048g/45D02282 2009-02-09 [expires: 2010-02-09]</blockquote></pre>
</div>
</div>
<div class="paragraph">
Then, you can directly import the key into the Git database by exporting it and piping that through <code>git hash-object</code>, which writes a new blob with those contents into Git and gives you back the SHA-1 of the blob:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ gpg -a --export F721C45A | git hash-object -w --stdin
659ef797d181633c87ec71ac3f9ba29fe5775b92</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now that you have the contents of your key in Git, you can create a tag that points directly to it by specifying the new SHA-1 value that the <code>hash-object</code> command gave you:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -a maintainer-pgp-pub 659ef797d181633c87ec71ac3f9ba29fe5775b92</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you run <code>git push --tags</code>, the <code>maintainer-pgp-pub</code> tag will be shared with everyone.
If anyone wants to verify a tag, they can directly import your PGP key by pulling the blob directly out of the database and importing it into GPG:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git show maintainer-pgp-pub | gpg --import</blockquote></pre>
</div>
</div>
<div class="paragraph">
They can use that key to verify all your signed tags.
Also, if you include instructions in the tag message, running <code>git show &lt;tag&gt;</code> will let you give the end user more specific instructions about tag verification.
</div>
</div>
<div class="sect3">
<h3 id="_build_number">Generating a Build Number</h3>
<div class="paragraph">

Because Git doesn’t have monotonically increasing numbers like 'v123' or the equivalent to go with each commit, if you want to have a human-readable name to go with a commit, you can run <code>git describe</code> on that commit.
In response, Git generates a string consisting of the name of the most recent tag earlier than that commit, followed by the number of commits since that tag, followed finally by a partial SHA-1 value of the commit being described (prefixed with the letter "g" meaning Git):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git describe master
v1.6.2-rc1-20-g8c5b85c</blockquote></pre>
</div>
</div>
<div class="paragraph">
This way, you can export a snapshot or build and name it something understandable to people.
In fact, if you build Git from source code cloned from the Git repository, <code>git --version</code> gives you something that looks like this.
If you’re describing a commit that you have directly tagged, it gives you simply the tag name.
</div><br>
<div class="paragraph">
By default, the <code>git describe</code> command requires annotated tags (tags created with the <code>-a</code> or <code>-s</code> flag); if you want to take advantage of lightweight (non-annotated) tags as well, add the <code>--tags</code> option to the command.
You can also use this string as the target of a <code>git checkout</code> or <code>git show</code> command, although it relies on the abbreviated SHA-1 value at the end, so it may not be valid forever.
For instance, the Linux kernel recently jumped from 8 to 10 characters to ensure SHA-1 object uniqueness, so older <code>git describe</code> output names were invalidated.
</div>
</div>
<div class="sect3">
<h3 id="_preparing_release">Preparing a Release</h3>
<div class="paragraph">

Now you want to release a build.
One of the things you’ll want to do is create an archive of the latest snapshot of your code for those poor souls who don’t use Git.
The command to do this is <code>git archive</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git archive master --prefix='project/' | gzip &gt; `git describe master`.tar.gz
$ ls *.tar.gz
v1.6.2-rc1-20-g8c5b85c.tar.gz</blockquote></pre>
</div>
</div>
<div class="paragraph">
If someone opens that tarball, they get the latest snapshot of your project under a <code>project</code> directory.
You can also create a zip archive in much the same way, but by passing the <code>--format=zip</code> option to <code>git archive</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git archive master --prefix='project/' --format=zip &gt; `git describe master`.zip</blockquote></pre>
</div>
</div>
<div class="paragraph">
You now have a nice tarball and a zip archive of your project release that you can upload to your website or email to people.
</div>
</div>
<div class="sect3">
<h3 id="_the_shortlog">The Shortlog</h3>
<div class="paragraph">

It’s time to email your mailing list of people who want to know what’s happening in your project.
A nice way of quickly getting a sort of changelog of what has been added to your project since your last release or email is to use the <code>git shortlog</code> command.
It summarizes all the commits in the range you give it; for example, the following gives you a summary of all the commits since your last release, if your last release was named v1.0.1:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git shortlog --no-merges master --not v1.0.1
Chris Wanstrath (6):
      Add support for annotated tags to Grit::Tag
      Add packed-refs annotated tag support.
      Add Grit::Commit#to_patch
      Update version and History.txt
      Remove stray `puts`
      Make ls_tree ignore nils

Tom Preston-Werner (4):
      fix dates in history
      dynamic version method
      Version bump to 1.0.2
      Regenerated gemspec for version 1.0.2</blockquote></pre>
</div>
</div>
<div class="paragraph">
You get a clean summary of all the commits since v1.0.1, grouped by author, that you can email to your list.
</div>
</div>
</div>
       </div>
    <?php require "../../../../templates/footer_outer.php"?>
    </div>
    <!-- Javascript -->

    <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../assets/fontawesome/js/all.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src="https://www.nubeera.com/js/navmenu.js"></script>
    <script>
        function openNav() {
            var x = document.getElementById("side-panel-box");
            if (x.style.left == "0px") {
                x.style.left = "-25%";
                $('#side-panel-toggle').css("left", "101%");
                $('#content-box').css("marginRight", "12%");
                $('#content-box').css('marginLeft', '12%');
                $('#side-panel-toggle').html("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
            } else {
                x.style.left = "0px";
                $('#side-panel-toggle').css("left", "80%");
                $('#content-box').css("marginRight", "");
                $('#content-box').css('marginLeft', '24%');
                $('#side-panel-toggle').html("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
            }
        }
        var x = window.matchMedia("(max-width: 750px)");
        myFunction(x); // Call listener function at run time
        x.addListener(myFunction);

        function myFunction(x) {
            if (x.matches) { // If media query matches
                $('#modal-sidepanel').attr('class', 'modal');
            } else {
                $('#modal-sidepanel').attr('class', '');
            }
        }
    </script>
</body>

</html>