<?php require_once('../header.php');?>
<div class="row">
    <div id="tickets" class="twelve columns"><div class="box-shadow bg-white b">
                <div class="right table-buttons">

                    <button disabled="" data-id="bulk-action" class="button secondary closeTickets">Close</button>

                    <button disabled="" data-id="bulk-action" class="button secondary assignTickets">Assign</button>

                    <button disabled="" data-id="bulk-action" class="button secondary grabTickets">Grab</button>

                    <button disabled="" data-id="bulk-action" class="button secondary mergeTickets">Merge</button>

                    <button disabled="" data-id="bulk-action" class="button secondary markSpamTickets">Spam</button>

                    <button disabled="" data-id="bulk-action" class="button secondary deleteRows"><span class="icon"></span> Delete</button>

                    <a href="http://zebreco.julian.localdev.outeredgeuk.com/admin/ticket/create" class="button primary addEmail"><span class="icon"></span> New Ticket</a>

                </div>

            </div>
            <table class="table full-width responsive"><thead>
                    <tr>
                        <th><input type="checkbox" class="selectAllRows"></th>

                        <th data-name="id" class=" sortable " data-sortorder="desc">#</th>

                        <th data-name="subject" class="large sortable " data-sortorder="desc">Subject</th>

                        <th data-name="contact.name" class="tiny sortable " data-sortorder="desc">Contact</th>

                        <th data-name="assignee.name" class="tiny sortable " data-sortorder="desc">Assignee</th>

                        <th data-name="project.name" class="tiny sortable " data-sortorder="desc">Project</th>

                        <th data-name="department.name" class="tiny sortable " data-sortorder="desc">Department</th>

                        <th data-name="lastupdate" class="no-wrap sortable " data-sortorder="desc">Last Updated</th>

                        <th data-name="duedate" class=" sortable " data-sortorder="desc">Due Date</th>

                    </tr>
                </thead>
                <tbody><tr data-justadded="false" data-error="false" class="closed"><td><input type="checkbox" class="checkbox" name="isSelected"></td>
                        <td><a href="/admin/ticket/146">1103</a></td>
                        <td>
                            <a href="/admin/ticket/146">dwqdwqwqddwqdwqdq</a>

                        </td>
                        <td class="l-h-40 no-wrap"><a class="entity-link" href="/admin/contact/72"><img width="40" height="40" src="https://secure.gravatar.com/avatar/fc6a361769781a2e27292387833bbb23?d=identicon&amp;s=40" title="Julian Krispel-Samsel" alt="Julian Krispel-Samsel" class="inline m-r left">Julian Krispel-Samsel</a></td>
                        <td> K Carr</td>
                        <td>sfdsfsdfsdf</td>
                        <td>Design Ddw</td>
                        <td class="no-wrap">2 days ago</td>
                        <td></td>
                        </tr><tr data-justadded="false" data-error="false" class="open"><td><input type="checkbox" class="checkbox" name="isSelected"></td>
                        <td><a href="/admin/ticket/145">1102</a></td>
                        <td>
                            <a href="/admin/ticket/145">dwqddwqdqw</a>

                        </td>
                        <td class="l-h-40 no-wrap"><a class="entity-link" href="/admin/contact/72"><img width="40" height="40" src="https://secure.gravatar.com/avatar/fc6a361769781a2e27292387833bbb23?d=identicon&amp;s=40" title="Julian Krispel-Samsel" alt="Julian Krispel-Samsel" class="inline m-r left">Julian Krispel-Samsel</a></td>
                        <td>Julian Krispel-Samsel</td>
                        <td>Project</td>
                        <td>Design Ddw</td>
                        <td class="no-wrap">19 hours ago</td>
                        <td></td>
                        </tr><tr data-justadded="false" data-error="false" class="open"><td><input type="checkbox" class="checkbox" name="isSelected"></td>
                        <td><a href="/admin/ticket/147">1104</a></td>
                        <td>
                            <a href="/admin/ticket/147">dwdwwqdwqdqw</a>

                        </td>
                        <td class="l-h-40 no-wrap"><a class="entity-link" href="/admin/contact/72"><img width="40" height="40" src="https://secure.gravatar.com/avatar/fc6a361769781a2e27292387833bbb23?d=identicon&amp;s=40" title="Julian Krispel-Samsel" alt="Julian Krispel-Samsel" class="inline m-r left">Julian Krispel-Samsel</a></td>
                        <td>Julian Krispel-Samsel</td>
                        <td></td>
                        <td>Design Ddw</td>
                        <td class="no-wrap">a day ago</td>
                        <td></td>
                    </tr>
                    <tr class="no-records">
                        <td colspan="20" class="text-left no-wrap">No records found</td>
                    </tr>
                    <tr class="loading">
                        <td colspan="20" class="text-left no-wrap">Loading</td>
                    </tr>
                    <tr class="errorLoading">
                        <td colspan="20" class="text-left no-wrap"><span class="error">An error has ocurred during a request to the server.</span></td>
                    </tr>
                </tbody>
            </table>
            <ul id="pagination" class="pagination"></ul>
        </div>
        <!-- Tickets (via JS) -->
    </div>
</div>
<?php require_once('../footer.php');?>
