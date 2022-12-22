@extends('layouts.layouts')

@section('title', 'Hospital Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Careenter & WorkUnit</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="neovis"></div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body p-0 rounded ">
                <img  src="{{asset('assets')}}/images/page-img/39.png" class="img-fluid rounded" alt="banner-img">
             </div>
          </div>
       </div>
       <div class="col-md-6">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patient Distribution</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="doc-chart-01" style="height: 415px;"></div>
             </div>
          </div>
       </div>
       <div class="col-md-6">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patients In</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="bar-chart-6"></div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection

@section('onload', 'draw()')

@push('css')
    <style>
        #neovis {
            height: 500px !important;
        }
    </style>
@endpush

@push('scripts')
<script type="text/javascript">

    let neoViz;

    function draw() {
        const config = {
            containerId: "neovis",
            neo4j: {
                serverUrl: "bolt://34.128.94.247:11687",
                serverUser: "neo4j",
                serverPassword: "root",
            },
            labels: {
                CareCenter: {
                    label: "CareCenterName",
                    [NeoVis.NEOVIS_ADVANCED_CONFIG]: {
                        function: {
                            title: (props) => NeoVis.objectToTitleHtml(props),
                        },
                        static: {
                            font: {
                            size: 18,
                            color: "#000",
                            background: "none",
                            },
                            borderWidth: 2,
                            borderWidthSelected: 2,
                            color: {
                            border: "#f7b924",
                            // background orange
                            background: "#f7b924",
                            highlight: {
                                border: "#5db665",
                            },
                            },
                        },
                    },
                },
                WorkUnit: {
                    label: "WorkUnitName",
                    [NeoVis.NEOVIS_ADVANCED_CONFIG]: {
                        function: {
                            title: (props) => NeoVis.objectToTitleHtml(props),
                            //icon
                            icon: (props) => {
                                return 'hospital';
                            }
                        },
                        static: {
                            font: {
                            size: 18,
                            color: "#000",
                            background: "none",
                            },
                            borderWidth: 2,
                            borderWidthSelected: 2,
                            color: {
                            border: "#5db665",
                            // background green
                            background: "#5db665",
                            highlight: {
                                border: "#5db665",
                            },
                            },
                        },
                    },
                },
            },
            relationships: {
                PART_OF: {
                    thickness: "weight",
                    caption: false,
                },
            },
            initialCypher: "MATCH (n)-[r:PART_OF]->(m) RETURN *"
        };

        neoViz = new NeoVis.default(config);
        neoViz.render();
    }
</script>
@endpush
