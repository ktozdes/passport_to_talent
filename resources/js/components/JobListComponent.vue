<div class="box">
            <article class="media">
                <div class="media-left">
                <a class="button is-link is-fullwidth is-outlined">Apply</a>
                /not applied
                </div>
            <div class="media-content">
                <div class="content">
                    <strong>Position</strong>: {{$job->position}}
                    <br>
                    <br>
                    <div class="company-container">
                        <small><strong>Company</strong>: {{$job->company->name}}</small>
                    </div>
                    <div class="salary-container">
                        <small><strong>salary</strong>: {{$job->salary_range}}</small>
                    </div>
                    <div class="job-description-container">
                        {{$job->job_description}}
                    </div>
                    <p class="has-text-right">
                        <a href="{{URL::route('job.show', [$job->id] )}}" class="button is-small is-link is-outlined">More Info</a>
                    </p>
                </div>
            </div>
            </article>
        </div>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
