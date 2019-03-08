<template>
    <tile :position=“position”>
        <div class=“grid gap-padding h-full markup”>
            <ul class=“align-self-center”>
                <li>
                    <span>Contributors</span>
                    <span class=“font-bold variant-tabular”> abc </span>
                </li>

                <li>
                    <span>Contributors</span>
                    <span class=“font-bold variant-tabular”> xzy </span>
                </li>
            </ul>
        </div>
    </tile>
</template>

<script>

 //   import { emoji, formatNumber } from ‘../helpers’;
  //  import echo from ‘../mixins/echo’;
 //   import Tile from ‘./atoms/Tile’;
 //   import saveState from ‘vue-save-state’;

    export default {
   //     components: {
   //         Tile,
    //    },

   //     mixins: [echo, saveState],

        props: ['position']
    /*
        data() {
            return {
                githubStars: 0,
                githubIssues: 0,
                githubPullRequests: 0,
                githubContributors: 0,

                packagistTotal: 0,
                packagistMonthly: 0,
            };
        },

        methods: {
            emoji,
                formatNumber,

                getEventHandlers() {
                return {
                   ‘Statistics.GitHubTotalsFetched’: response => {
                    this.githubStars = response.stars;
                    this.githubIssues = response.issues;
                    this.githubPullRequests = response.pullRequests;
                    this.githubContributors = response.contributors;
                },

                   ‘Statistics.PackagistTotalsFetched’: response => {
                    this.packagistTotal = response.total;
                    this.packagistMonthly = response.monthly;
                },
            };
            },

            getSaveStateConfig() {
                return {
                    cacheKey: ‘statistics’,
            };
            },
        },
        */


    };

</script>
