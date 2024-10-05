<?php

use function Livewire\Volt\{state, mount};

state(['path', 'description', 'whoPerforms', 'benefits', 'purpose', 'whatWeDo', 'whyChooseUs', 'additionalInfo', 'bgImage']);

mount(function () {
    $this->path = request()->path();

    $this->description = [
        'technology-scouting' => [
            "Technology Scouting is a critical process for businesses looking to maintain a competitive edge in a fast-paced, technology-driven market. It involves actively searching for new and emerging technologies that can significantly impact your business operations, product development, and market positioning. This service is not just about identifying the latest innovations but also about understanding how these technologies can be integrated into your existing systems to drive efficiency, reduce costs, or create new revenue streams.",
            "Our Technology Scouting service includes thorough market and technology landscape analyses to identify potential technologies that align with your strategic goals. We also assess the feasibility and scalability of these technologies within your business context. Whether it's identifying disruptive technologies, evaluating early-stage innovations, or scouting for acquisition targets, our approach ensures that you are equipped with the latest tools and insights to stay ahead of the curve."
        ],

        'white-space-analysis' => [
            'White Space Analysis is a strategic tool used to uncover opportunities in the market or technological landscape where competition is minimal or non-existent. This service involves identifying gaps—known as "white spaces"—in existing patent coverage, technological development, or market offerings. These white spaces represent fertile ground for innovation, allowing your business to develop new products or services that meet unaddressed needs.',
            "Our White Space Analysis goes beyond merely identifying these gaps. We provide a comprehensive evaluation of the commercial potential within these spaces, helping you prioritize areas for investment and innovation. This service is especially valuable for companies looking to expand their IP portfolios, enter new markets, or innovate in areas where they can gain a first-mover advantage. By focusing on these underexplored areas, your business can carve out a unique niche, reduce competitive pressures, and capitalize on untapped market potential.",
        ],

        'technology-landscape' => [
            "Technology Landscape Analysis offers a panoramic view of the current state of technology within a specific industry or field. This service is essential for companies aiming to understand their position relative to competitors, as well as for those looking to identify emerging trends, potential disruptors, and new opportunities for innovation. By analyzing patent trends, R&D activities, and the strategies of key players, we provide a comprehensive understanding of the technological environment.",
            "Our Technology Landscape Analysis not only maps out existing technologies but also highlights future trends and potential areas for development. This service is invaluable for strategic planning, helping you to align your R&D efforts with market needs, anticipate shifts in the competitive landscape, and make informed decisions about technology investments. Whether you are developing new products or refining existing ones, understanding the technology landscape allows you to make data-driven decisions that support long-term growth and innovation."
        ],

        'invalidity-contentions' => [
            "Invalidity Contentions are a critical component of patent litigation, particularly when a company is accused of infringing on a competitor’s patent. This service involves challenging the validity of the patent in question by presenting prior art, legal arguments, or evidence that the patent’s claims are not valid. The goal is to invalidate the patent or weaken its enforceability, thereby protecting your business from potential legal liabilities.",
            "Our Invalidity Contentions service is meticulously crafted to provide a robust defense. We conduct exhaustive searches for prior art, including patents, publications, and other publicly available information that predates the patent in question. Our legal experts then analyze this prior art in the context of the patent’s claims, identifying weaknesses or errors that could be used to challenge its validity. This service not only helps you defend against infringement claims but also provides leverage in negotiations, potentially leading to more favorable settlements or licensing terms.",
        ],

        'state-of-the-art-search' => [
            "A State of the Art Search is an essential step in the innovation and patenting process, providing a comprehensive overview of the most current and advanced technologies, methods, and developments in a specific field. This search is designed to ensure that your innovation is truly novel and non-obvious, two critical criteria for patentability. By understanding the existing technological landscape, you can position your innovation more effectively, avoiding potential patent infringements and identifying opportunities for differentiation.",
            "Our State of the Art Search service involves a thorough examination of patents, scientific publications, industry reports, and other relevant sources to compile a complete picture of the current state of technology. We then analyze this information to identify the most relevant technologies and assess their impact on your innovation. This service is crucial for guiding your R&D efforts, ensuring that your work is focused on creating truly groundbreaking solutions that stand out in a crowded market.",
        ],

        'patent-valuation' => [
            "Patent Valuation is a critical service for businesses looking to understand the financial worth of their intellectual property. This valuation is essential for various strategic decisions, including licensing, mergers and acquisitions, investment, and litigation. An accurate patent valuation helps you to negotiate better deals, attract investment, and make informed decisions about managing your IP portfolio.",
            "Our Patent Valuation service involves a comprehensive analysis of the patent's potential market impact, its income-generating capabilities, and its strategic importance to your business. We use a combination of market analysis, financial modeling, and comparative assessments to provide a precise valuation of your patents. Whether you are preparing for a licensing negotiation, selling your IP, or defending it in court, our valuation service gives you the insights you need to maximize the value of your intellectual property.",
        ],

        'market-report' => [
            "Market Reports are in-depth analyses that provide a detailed overview of specific markets, including size, growth trends, key players, and competitive dynamics. These reports are invaluable for businesses looking to enter new markets, launch new products, or refine their strategic planning. By understanding the market landscape, you can make informed decisions that align with your business goals and maximize your chances of success.",
            "Our Market Reports service goes beyond simple data collection. We provide comprehensive analyses that include market segmentation, consumer behavior, competitive benchmarking, and trend identification. Each report is tailored to your specific needs, focusing on the markets, products, or regions most relevant to your business. This service is essential for reducing risk, identifying opportunities, and ensuring that your business strategies are grounded in solid market intelligence.",
        ],

        'competitive-analysis' => [
            "Competitive Analysis is a strategic service that provides a deep dive into the strengths, weaknesses, strategies, and market positions of your competitors. This analysis is crucial for understanding your competitive environment and for identifying opportunities to differentiate your offerings, capture market share, and mitigate potential risks.",
            "Our Competitive Analysis service includes a thorough examination of your competitors’ products, pricing strategies, marketing tactics, and technological advancements. We also analyze their market positioning, customer base, and growth strategies to provide a comprehensive view of the competitive landscape. With this information, we help you develop strategies to outperform your rivals, capitalize on market opportunities, and avoid threats. Whether you’re planning a new product launch, entering a new market, or simply looking to strengthen your market position, our Competitive Analysis service provides the insights you need to make informed, strategic decisions.",
        ]
    ];

    $this->whoPerforms = [
        'technology-scouting' => "At Patrisen, our Technology Scouting services are conducted by a team of seasoned professionals, including technology analysts, R&D experts, and industry specialists. These experts are equipped with deep domain knowledge and access to extensive global databases, industry networks, and academic publications. They leverage this expertise to identify technologies that align with your business needs and strategic objectives.",
        'white-space-analysis' => "Our White Space Analysis is carried out by a team of patent analysts, market researchers, and technology strategists. These experts use sophisticated tools and methodologies to map out the existing patent and technology landscape, identify gaps, and assess the potential for innovation.",
        'technology-landscape' => "Our Technology Landscape Analysis is conducted by a team of technology experts, patent analysts, and market researchers. They combine their expertise with advanced data analytics tools to provide a detailed overview of the technological landscape in your industry.",
        'invalidity-contentions' => "Our Invalidity Contentions service is handled by a team of patent attorneys, legal experts, and prior art search specialists. These professionals have extensive experience in patent law and litigation, ensuring that your case is built on a strong foundation of evidence and legal expertise.",
        'state-of-the-art-search' => "Our State of the Art Searches are conducted by a team of patent analysts, technology experts, and industry researchers. These professionals use advanced search tools and databases to gather and analyze the most relevant and up-to-date information in your field of interest.",
        'patent-valuation' => "Our Patent Valuation services are conducted by a team of financial analysts, IP experts, and patent attorneys. These professionals use a combination of market analysis, financial modeling, and legal expertise to provide a precise valuation of your patents.",
        'market-report' => "Our Market Reports are developed by a team of market analysts, industry experts, and business strategists. They gather and analyze data from various sources, including market research firms, industry publications, and financial reports, to create comprehensive and actionable insights.",
        'competitive-analysis' => "Our Competitive Analysis services are performed by a team of market analysts, business strategists, and industry experts. These professionals use a combination of primary and secondary research, data analytics, and industry insights to provide a comprehensive view of your competitive landscape.",
    ];

    $this->benefits = [
        'technology-scouting' => [
            'Accelerate Innovation' => 'By identifying the latest technological trends and innovations, you can stay ahead of competitors and quickly integrate new technologies into your offerings.',
            'Strategic Partnerships' => 'Technology Scouting allows you to discover potential partners or acquisition targets, facilitating collaborations that can enhance your market position.',
            'Risk Mitigation' => 'By understanding the technological landscape, you can avoid potential pitfalls and invest in technologies with proven potential.',
            'Informed R&D Investments' => 'Gain insights into which technologies are worth pursuing, helping you allocate your R&D resources effectively.',
        ],

        'white-space-analysis' => [
            'Discover New Opportunities' => "Identify unexplored areas in the market where you can innovate and lead.",
            'Strategic Advantage' => "Develop new products or technologies in areas with minimal competition, giving you a head start in the market.",
            'Informed R&D Planning' => "Focus your research and development efforts on areas with the highest potential for innovation and market impact.",
            'Purpose of White Space Analysis ' => "The purpose of White Space Analysis is to guide your innovation efforts by highlighting areas where you can create new products, services, or technologies that meet unmet needs. It helps you focus on the right opportunities, minimizing risk and maximizing potential returns.",
        ],

        'technology-landscape' => [
            'Competitive Benchmarking' => "Understand your position in the market relative to competitors and identify areas for improvement.",
            'Strategic Planning' => "Use insights from the analysis to inform your R&D strategy, product development, and market entry decisions.",
            'Trend Identification' => " Stay ahead of emerging trends and potential disruptions in your industry.",
        ],

        'invalidity-contentions' => [
            'Defense Against Infringement' => "Protect your business from costly infringement lawsuits by invalidating threatening patents.",
            'Cost Savings' => "Avoid potential damages or settlements by proving that a patent is invalid.",
            'Strategic Advantage' => "Gain leverage in negotiations by challenging the validity of a competitor’s patent.",
        ],

        'state-of-the-art-search' => [
            'Ensure Novelty' => 'Verify that your innovation is truly novel and not already disclosed by existing technologies.',
            'Competitive Benchmarking' => 'Compare your technology with the latest advancements to assess its competitiveness.',
            'Informed R&D' => 'Guide your research and development efforts with a clear understanding of the current state of technology.',
        ],

        'patent-valuation' => [
            'Informed Licensing' => "Set fair and profitable royalty rates for licensing agreements based on the accurate value of your patents.",
            'Strategic Decision-Making' => "Make informed decisions about selling, licensing, or defending your patents based on their financial value.",
            'Investment Attraction' => "Attract investors by demonstrating the value of your IP assets.",
            'Litigation Support' => "Use patent valuation to support damage claims or settlements in litigation.",
        ],

        'market-report' => [
            'Informed Decision-Making' => "Use detailed market data to guide your business strategies, investments, and product development efforts.",
            'Risk Mitigation' => "Identify potential risks and challenges in the market before making significant investments.",
            'Opportunity Identification' => "Discover new market opportunities, emerging trends, and areas for expansion.",
        ],

        'competitive-analysis' => [
            'Strategic Positioning' => "Understand how your products and services compare to those of your competitors, allowing you to position yourself more effectively in the market.",
            'Identify Opportunities' => "Discover gaps in the market that you can exploit to gain a competitive advantage.",
            'Mitigate Risks' => "Anticipate potential threats from competitors and develop strategies to counteract them.",
            'Benchmarking' => "Measure your performance against industry leaders and identify areas for improvement.",
        ]

    ];

    $this->purpose = [
        'technology-scouting' => "At Patrisen, our Technology Scouting services are conducted by a team of seasoned professionals, including technology analysts, R&D experts, and industry specialists. These experts are equipped with deep domain knowledge and access to extensive global databases, industry networks, and academic publications. They leverage this expertise to identify technologies that align with your business needs and strategic objectives.",
        'white-space-analysis' => "The purpose of White Space Analysis is to guide your innovation efforts by highlighting areas where you can create new products, services, or technologies that meet unmet needs. It helps you focus on the right opportunities, minimizing risk and maximizing potential returns.",
        'technology-landscape' => "The primary purpose of Technology Landscape Analysis is to provide businesses with a clear and actionable understanding of the current technology environment. This analysis helps in making informed decisions about where to invest in R&D, how to position products in the market, and how to respond to competitive threats.",
        'invalidity-contentions' => "The purpose of Invalidity Contentions is to protect your business from patent infringement claims by proving that the patent in question is not valid. This can be achieved by identifying prior art that predates the patent or by highlighting errors in the patent’s claims.",
        'state-of-the-art-search' => "The primary purpose of a State of the Art Search is to establish the baseline of existing technologies in a specific field. This search helps you determine whether your invention is new and non-obvious, which are key criteria for patentability. It also provides valuable insights into how your technology compares to the latest developments in the industry.",
        'patent-valuation' => "The purpose of Patent Valuation is to provide a clear and accurate understanding of the monetary worth of your patents. This valuation is essential for maximizing the returns from your intellectual property, whether through licensing, sales, or litigation.",
        'market-report' => "The purpose of Market Reports is to provide businesses with a deep understanding of the market landscape. This includes identifying market trends, understanding competitive dynamics, and evaluating the potential for new products or services. Market Reports are essential for making data-driven decisions that align with your business goals.",
        'competitive-analysis' => "The primary purpose of Competitive Analysis is to give your business a clear understanding of where it stands in relation to its competitors. This analysis informs your strategic decisions, helping you to develop products, services, and marketing strategies that outperform the competition.",
    ];

    $this->whatWeDo = [
        'technology-scouting' => [
            'Identify Emerging Technologies' => 'We conduct comprehensive searches to identify technologies that can offer you a competitive edge.',
            'Evaluate Technology Potential' => 'Our experts assess the feasibility, market potential, and alignment of new technologies with your strategic goals.',
            'Facilitate Strategic Partnerships' => 'We connect you with technology providers, startups, and research institutions that can help bring these innovations to life.',
            'Provide Actionable Insights' => 'Our detailed reports and recommendations help you make informed decisions on technology adoption and integration.',
        ],

        'white-space-analysis' => [
            'Comprehensive Landscape Mapping' => 'We map the entire patent and technology landscape to identify gaps where innovation is needed.',
            'Opportunity Assessment' => "Our team evaluates the commercial potential of identified white spaces and recommends the best areas for investment.",
            'Strategic Recommendations' => "We provide actionable insights and strategies to help you capitalize on these white spaces effectively.",
            'Patent Filing Support' => "We assist in filing patents for innovations developed in identified white spaces, ensuring your ideas are protected.",
        ],

        'technology-landscape' => [
            'In-Depth Analysis' => "We provide a thorough analysis of the technology landscape, including key players, patent trends, and emerging technologies.",
            'Competitive Insights' => "Gain insights into your competitors’ technology strategies and how they compare to your own.",
            'Strategic Recommendations' => "We offer actionable recommendations to help you capitalize on identified opportunities and mitigate risks.",
            'Customized Reports' => "Our reports are tailored to your specific industry and business needs, ensuring relevance and value.",
        ],

        'invalidity-contentions' => [
            'Comprehensive Prior Art Search' => "We conduct exhaustive searches to find prior art that can invalidate the patent in question.",
            'Legal Analysis and Strategy' => "Our patent attorneys analyze the findings and develop a robust legal strategy to challenge the patent’s validity.",
            'Document Preparation' => "We prepare detailed invalidity contentions that can be used in court or presented to the patent office.",
            'Ongoing Support' => "Our team provides support throughout the litigation process, helping you navigate the complexities of patent law.",
        ],

        'state-of-the-art-search' => [
            'Comprehensive Data Collection' => "We gather data from patents, scientific journals, industry publications, and other sources to create a complete picture of the current state of technology.",
            'Detailed Analysis' => "Our experts analyze the gathered data to identify the most relevant technologies and assess their impact on your innovation.",
            'Custom Reports' => "We provide tailored reports that summarize the findings and offer actionable insights for your R&D efforts.",
            'Support for Patent Filings' => "If your innovation is novel, we can assist with the patent filing process to protect your intellectual property.",
        ],

        'patent-valuation' => [
            'Market Analysis' => "We analyze the market potential of the technology covered by your patents, including market size, growth trends, and competitive landscape.",
            'Income Approach' => "Our experts use financial models to estimate the future income that your patents could generate, often using methods like discounted cash flow (DCF).",
            'Cost Approach' => "We consider the costs associated with developing the technology and obtaining the patent, providing a cost-based valuation.",
            'Comparative Analysis' => "We compare your patents with similar patents that have been licensed or sold to determine their market value.",
            'Comprehensive Reports' => "Our detailed reports provide a clear explanation of the valuation process and the factors that influence the value of your patents.",
        ],

        'market-report' => [
            'Market Size and Growth Analysis' => "We analyze the size of the market, historical growth rates, and future projections to help you understand the potential for your products or services.",
            'Competitive Landscape' => "Our reports include a detailed analysis of the key players in the market, including their market share, strengths, weaknesses, and strategic positioning.",
            'Trend Analysis' => "We identify and analyze emerging trends, consumer behavior, and technological advancements that could impact your business.",
            'Opportunities and Challenges' => "Our reports highlight the opportunities for growth and the challenges you may face in the market, helping you plan strategically.",
            'Customized Reports' => "We tailor our Market Reports to focus on the specific markets, products, or regions that are most relevant to your business.",
        ],

        'competitive-analysis' => [
            'Competitor Identification' => "We identify and profile your key competitors, including their strengths, weaknesses, market share, and strategic focus.",
            'Product Comparison' => "We compare your products and services with those of your competitors, highlighting areas where you have a competitive advantage or where improvements are needed.",
            'Market Positioning' => "We analyze how your competitors are positioned in the market and provide insights on how you can differentiate yourself effectively.",
            'Strategic Recommendations' => "Based on our analysis, we offer actionable recommendations to help you improve your competitive position and capitalize on market opportunities.",
            'Ongoing Monitoring' => "We provide continuous monitoring of your competitive landscape, keeping you informed of any changes that could impact your business.",
        ]
    ];

    $this->whyChooseUs = [
        'technology-scouting' => [
            'Expertise' => 'Our team combines deep industry knowledge with advanced analytical tools, ensuring that you receive the most accurate and relevant information.',
            'Global Reach' => 'With access to global databases and networks, we scout technologies from all corners of the world, bringing you the best opportunities.',
            'Tailored Approach' => 'We understand that every business is unique. Our technology scouting services are customized to meet your specific needs and objectives.',
            'Proven Track Record' => 'We have a history of successfully helping businesses identify and adopt technologies that lead to substantial growth and innovation.',
        ],

        'white-space-analysis' => [
            'Advanced Analytical Tools' => 'We use cutting-edge tools and methodologies to ensure our analysis is thorough and accurate.',
            'Expert Insight' => 'Our team has years of experience in patent analysis and market research, providing you with expert guidance.',
            'Customized Solutions' => "We tailor our analysis to meet the specific needs of your business, ensuring that the opportunities we identify are relevant and actionable.",
            'Proactive Innovation' => "With our White Space Analysis, you can proactively identify and seize opportunities before your competitors do.",
        ],

        'technology-landscape' => [
            'Expert Team' => "Our team’s deep industry knowledge ensures that you receive insights that are both accurate and actionable.",
            'Data-Driven Approach' => "We leverage advanced data analytics tools to provide a comprehensive and detailed analysis.",
            'Tailored Solutions' => "We understand that each business is unique, and we customize our services to meet your specific requirements.",
            'Strategic Value' => "Our analysis not only highlights where you stand today but also guides you on how to navigate the future technology landscape effectively.",
        ],

        'invalidity-contentions' => [
            'Expertise in Patent Law' => 'Our team has extensive experience in patent litigation and invalidity contentions, ensuring that your case is handled with the highest level of expertise.',
            'Thorough Research' => 'We leave no stone unturned in our search for prior art, ensuring that your invalidity contentions are well-supported.',
            'Proven Track Record' => 'We have successfully challenged the validity of numerous patents, protecting our clients from costly litigation.',
            'Tailored Legal Strategies' => 'We develop customized legal strategies that are tailored to the specifics of your case and industry.',
        ],

        'state-of-the-art-search' => [
            'Expert Knowledge' => "Our team has deep expertise in conducting State of the Art Searches across various industries, ensuring accurate and relevant results.",
            'Advanced Tools' => "We use the latest search tools and databases to conduct thorough and comprehensive searches.",
            'Customized Approach' => "We tailor our searches to your specific technology and industry, providing insights that are directly applicable to your business.",
            'Proven Process' => "Our methodology ensures that all relevant technologies are identified and analyzed, giving you a complete understanding of the current state of the art.",
        ],

        'patent-valuation' => [
            'Expert Team' => "Our team combines financial expertise with deep knowledge of intellectual property law to deliver accurate and reliable valuations.",
            'Proven Methodologies' => "We use established valuation methods that are recognized and accepted by investors, courts, and industry professionals.",
            'Tailored Services' => "We customize our valuation services to meet the specific needs of your business, whether you are preparing for a licensing negotiation, a sale, or litigation.",
            'Strategic Insights' => "Our valuations are not just numbers; they come with strategic recommendations that help you maximize the value of your IP assets.",
        ],

        'market-report' => [
            'Industry Expertise' => "Our analysts have deep knowledge of various industries, ensuring that our reports are accurate and relevant.",
            'Comprehensive Analysis' => "We provide a thorough analysis that covers all aspects of the market, from macroeconomic factors to competitive dynamics.",
            'Data-Driven Insights' => "Our reports are based on extensive data collection and analysis, providing you with insights that are both actionable and reliable.",
            'Strategic Guidance' => "In addition to data, we offer strategic recommendations that help you navigate the market effectively and capitalize on opportunities.",
        ],

        'competitive-analysis' => [
            'In-Depth Expertise' => "Our team has extensive experience in conducting competitive analysis across a wide range of industries, ensuring that you receive insights that are both accurate and actionable.",
            'Comprehensive Approach' => "We consider all aspects of your competitors’ strategies, from their marketing and sales tactics to their product development and pricing.",
            'Customized Analysis' => "We tailor our competitive analysis to your specific industry, business model, and strategic goals.",
            'Proactive Insights' => "Our analysis not only helps you understand your current position but also provides forward-looking insights to help you stay ahead of the competition.",
        ]
    ];

    $this->additionalInfo = [
        'technology-scouting' => "Technology Scouting is not just about finding new technologies; it's about understanding how these technologies fit into your business strategy and how they can be leveraged for maximum impact. By partnering with us, you gain access to a wealth of knowledge and expertise that ensures your business stays at the forefront of technological advancement.",
        'white-space-analysis' => "White Space Analysis is crucial for companies looking to innovate strategically. By identifying areas with little competition, you can invest in developing new technologies and products that meet market needs and drive your business forward. Our team’s expertise ensures that you not only find these opportunities but also have the strategies in place to exploit them successfully.",
        'technology-landscape' => "Technology Landscape Analysis is essential for businesses looking to maintain a competitive edge in their industry. By understanding the current state of technology, you can make informed decisions that drive innovation, improve your market position, and ensure long-term success.",
        'invalidity-contentions' => 'Invalidity Contentions are a critical tool in defending your business against patent infringement claims. By challenging the validity of a patent, you can protect your company from legal risks and gain a strategic advantage in the market. Our team’s expertise and dedication ensure that your invalidity contentions are thorough, well-supported, and effective.',
        'state-of-the-art-search' => 'A State of the Art Search is essential for any business looking to innovate responsibly and effectively. By understanding the current technological landscape, you can ensure that your innovations are truly groundbreaking and have the potential to succeed in the market. Our expertise and thorough approach ensure that you have all the information you need to move forward with confidence.',
        'patent-valuation' => "Understanding the value of your patents is critical for making informed business decisions. Whether you are looking to license your technology, attract investment, or defend your IP in court, a thorough and accurate patent valuation is essential. Our team’s expertise and comprehensive approach ensure that you have the information you need to leverage your intellectual property effectively.",
        'market-report' => "Market Reports are a vital resource for any business looking to succeed in today’s competitive environment. Whether you’re entering a new market, launching a new product, or planning your growth strategy, our Market Reports provide the insights you need to make informed decisions and achieve your business goals.",
        'competitive-analysis' => "Understanding your competition is crucial to your business’s success. Competitive Analysis gives you the insights needed to outperform your rivals, capitalize on market opportunities, and avoid potential threats. With our comprehensive analysis, you can confidently navigate the competitive landscape and make strategic decisions that drive growth and profitability.",
    ];

    $this->bgImage = [
        'technology-scouting' => "technologyscouting.jpeg",
        'white-space-analysis' => "whitespaceanalysis.jpeg",
        'technology-landscape' => "technologylandscape.jpeg",
        'invalidity-contentions' => "invaliditycontentions.jpeg",
        'state-of-the-art-search' => "stateoftheartsearch.jpeg",
        'patent-valuation' => "patentvaluation.jpeg",
        'market-report' => "marketreport.jpeg",
        'competitive-analysis' => "competitiveanalysis.jpeg",
    ];
});

?>

<div>
    <div class="relative h-96 xl:mt-24 uppercase text-white text-xl sm:text-4xl font-light tracking-wide">
        <img class="w-full h-full" src="{{ asset('page-bg-images/'.$bgImage[$path]) }}">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">{{str_replace('-',' ',$path)}}</div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-12 sm:py-20 xl:flex xl:justify-between xl:gap-4">
        <div class="xl:w-4/5 grid grid-cols-1 gap-6 sm:gap-12 h-min xl:pr-32">
            <div class="capitalize text-xl sm:text-3xl tracking-wide text-amber-500 font-medium">{{str_replace('-',' ',$path)}}</div>
            <div class="grid grid-cols-1 gap-4 h-min">
                <div class="grid grid-cols-1 gap-14 h-min">
                    <div class="grid grid-cols-1 gap-6 h-min">
                        @foreach($description[$path] as $paragraphs)
                        <div class="text-xs sm:text-base leading-2 font-medium text-black text-justify">
                            {{$paragraphs}}
                        </div>
                        @endforeach
                    </div>

                    <div class="text-xs sm:text-base leading-2 font-medium text-black text-justify">
                        <span class="text-lg sm:text-2xl tracking-wide text-amber-500 font-medium capitalize">Who @if($path == 'market-report'){{'Creates'}}@else{{'Performs'}}@endif {{str_replace('-',' ',$path)}}@if($path == 'technology-landscape') {{'Analysis'}}@endif?</span>
                        {{$whoPerforms[$path]}}
                    </div>
                    <div class="grid grid-cols-1 gap-3 h-min text-justify">
                        <div class="text-lg sm:text-2xl tracking-wide text-amber-500 font-medium capitalize">
                            Benefits of {{str_replace('-',' ',$path)}} @if($path == 'technology-landscape') Analysis @endif
                        </div>
                        <div class="grid grid-cols-1 gap-4 h-min text-sm font-normal text-black">
                            @foreach($benefits[$path] as $heading => $statement)
                            <div class="text-xs sm:text-base font-medium">
                                <span class="text-lg sm:text-2xl tracking-wide text-amber-500 font-medium">{{$loop->iteration}}) {{$heading}}: </span>{{$statement}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="text-xs sm:text-base leading-2 font-medium text-black text-justify">
                        <span class="text-lg sm:text-2xl sm:tracking-wide text-amber-500 font-medium capitalize">Purpose of {{str_replace('-',' ',$path)}} @if($path == 'technology-landscape') Analysis @endif</span>
                        {{$purpose[$path]}}
                    </div>
                </div>
            </div>
        </div>
        <div class="max-xl:hidden w-1/5 h-min grid grid-cols-1 gap-8">
            <div class="h-min grid grid-cols-1 gap-2">
                <div class="text-2xl font-medium text-black">Our Services</div>
                <div class="border-2 border-amber-500 h-0 w-10/12"></div>
            </div>
            <div class="h-min grid grid-cols-1 gap-2 font-medium">
                @foreach($bgImage as $key => $value)
                <a href="/{{$key}}" wire:navigate class="text-sm cursor-pointer transition-colors duration-500 group shadow-md shadow-black/50 @if($path == $key) bg-amber-500 @else hover:bg-amber-500 bg-white text-black @endif">
                    <div class="p-2.5 flex justify-between items-center gap-2 w-min whitespace-nowrap">
                        <div>
                            <svg class="w-3 h-3  @if($path == $key) text-white @else group-hover:text-white text-black @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7" />
                            </svg>
                        </div>
                        <div class="capitalize @if($path == $key) text-white @else group-hover:text-white text-black @endif"> {{str_replace('-',' ',$key)}}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-8 px-4 md:px-12 lg:px-20 xl:px-28 py-12 sm:py-20">
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-black uppercase font-bold text-base sm:text-lg">What We Can Do for You?</div>
            <div class="grid grid-cols-1 gap-8">
                @foreach($whatWeDo[$path] as $heading => $statement)
                <div x-data="{showDropdown : false}">
                    <div class="flex justify-between gap-4">
                        <div @click="showDropdown = !showDropdown" :class="showDropdown ? 'bg-amber-500' : 'bg-gray-400'" class="w-min h-min rounded-full p-2 cursor-pointer">
                            <svg x-show="!showDropdown" class="w-3 sm:w-6 h-3 sm:h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                            <svg x-show="showDropdown" class="w-3 sm:w-6 h-3 sm:h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                            </svg>
                        </div>
                        <div class="text-md w-full items-center font-thin text-black grid grid-cols-1 gap-1 sm:gap-4">
                            <div class="text-base sm:text-xl text-amber-500 font-semibold">{{$heading}}</div>
                            <div x-show="showDropdown" class="max-sm:text-xs font-medium">{{$statement}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 h-min">
            <div class="text-black uppercase font-bold text-lg">Skills and Experiences</div>
            <div class="grid grid-cols-1 gap-8 h-min">
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 80%" class="flex justify-between">
                            <div class="text-sm text-black font-medium uppercase">Social Marketing</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 rounded">80%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 90%" class="flex justify-between">
                            <div class="text-sm text-black font-medium uppercase">Branding</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 rounded">90%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <div class="w-full h-min bg-transparent rounded-full grid grid-cols-1 gap-2">
                        <div style="width: 60%" class="flex justify-between">
                            <div class="text-sm text-black font-medium uppercase">Stratergy Planning</div>
                            <div class="bg-amber-500 w-min text-white text-xs font-medium px-3 py-1 rounded">60%
                            </div>
                        </div>
                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-12 lg:px-20 xl:px-28 py-14 sm:py-28 bg-amber-500 grid grid-cols-1 gap-4 text-center text-white font-thin">
        <div class="text-xl sm:text-3xl capitalize">Additional Information About {{str_replace('-',' ',$path)}} @if($path == 'technology-landscape') Analysis @endif</div>
        <div class="text-sm sm:text-lg tracking-widest">{{$additionalInfo[$path]}}</div>
    </div>
    <div class="grid grid-cols-1 gap-8 px-4 md:px-12 lg:px-20 xl:px-28 py-10 sm:py-16 text-amber-500">
        <div class="text-lg sm:text-2xl font-semibold capitalize">Why @if($path == 'market-report'){{'Choose our'}}@else{{'Do'}}@endif {{str_replace('-',' ',$path)}}@if($path == 'market-report'){{'s'}}@endif @if($path == 'technology-landscape') Analysis @endif @if($path != 'market-report'){{'with Us'}}@endif?</div>
        <div class="h-min grid grid-cols-1 gap-4 font-semibold">
            @foreach($whyChooseUs[$path] as $heading => $statement)
            <div class="flex justify-between items-start gap-2">
                <div>
                    <svg class="w-6 h-6 text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                    </svg>
                </div>
                <div class="text-xs sm:text-base md:text-lg lg:text-xl text-amber-500 font-semibold whitespace-nowrap">{{$heading}} :</div>
                <div class="text-xs sm:text-base max-sm:tracking-tighter w-full items-center font-medium text-black">
                    {{$statement}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>