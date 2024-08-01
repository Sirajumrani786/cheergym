@include('includes.header')

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                @endif

                <!-- Auto-hide alerts after 3 seconds -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        setTimeout(function() {
                            const alerts = document.querySelectorAll('.alert');
                            alerts.forEach(alert => {
                                alert.style.transition = 'opacity 0.5s ease';
                                alert.style.opacity = '0';
                                setTimeout(() => alert.remove(), 500); // Remove after fade out
                            });
                        }, 3000); // 3000 milliseconds = 3 seconds
                    });
                </script>

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table align-items-center ">
                            <thead class="">
                                <tr>
                                     <th>User</th>
                                      <th>Review</th>
                                          <th>Report</th>
                                    <th></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reports as $report)
                                    <tr>
                                        <td>{{ $report->user ? $report->user->name : '' }}</td>
                                        <td>{{ $report->review ? $report->review->feedback : '' }}</td>
                                        <td>{{ $report->report }}</td>
                                  <td></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center">No reviews found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                      <th>User </th>
                                        <th>Review </th>
                                    <th>Report </th>
                                
                                  
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }
        });

        var statusToggles = document.querySelectorAll('.status-toggle');

        statusToggles.forEach(function(toggle) {
            $(toggle).bootstrapSwitch({
                onSwitchChange: function(event, state) {
                    var reviewId = $(this).data('review-id');
                    var status = state ? 1 : 0;
                }
            });
        });
    });

    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                // Create a form element
                let form = document.createElement('form');
                form.action = url;
                form.method = 'POST';

                // Add CSRF token input
                let csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}'; // Get the CSRF token from Blade

                // Add method input for DELETE
                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';

                // Append inputs to the form
                form.appendChild(csrfToken);
                form.appendChild(method);

                // Append form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>
