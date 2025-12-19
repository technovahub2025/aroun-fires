SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET NAMES utf8mb4;

CREATE TABLE `tb1_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_log` datetime NOT NULL,
  `updated_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_admin` (`id`, `name`, `email`, `phone`, `position`, `password`, `status`, `crm_id`, `created_log`, `updated_log`) VALUES
(1, 'Seyfert Admin', 'superadmin@gmail.com', '9597390711', '1', '$2y$12$YmD/zhIaYEjsSiDgFuvlpOBn1qt2r5H1V/pIiyqcYKqkoIxVnWnRe', '1', '1', '2024-08-19 10:45:13', '2024-11-20 12:07:35'),
(3, 'Admin Team', 'admin@gmail.com', '1234567890', '2', '$2y$12$YmD/zhIaYEjsSiDgFuvlpOBn1qt2r5H1V/pIiyqcYKqkoIxVnWnRe', '1', '1', '2024-09-13 13:46:55', '2024-11-20 12:08:50');

CREATE TABLE `tb1_blog` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_blog` (`id`, `image`, `title`, `url`, `content`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(7, '1761563675_1 (1).png', 'The Lifeline on High: Ensuring Safety with Fixed Lifeline Systems', 'the-lifeline-on-high-ensuring-safety-with-fixed-lifeline-systems', 'Look around any modern city or industrial complex, and you will see them: the maintenance worker scaling a communication tower, the window washer descending a gleaming skyscraper, or the engineer inspecting a rooftop HVAC unit. These professionals perform their duties dozens, even hundreds, of feet in the air, where a single misstep can be catastrophic. What keeps them safe? Often, the answer is a system so fundamental and reliable that it is known as a lifeline. But not all lifelines are created equal. While temporary systems have their place, Fixed Lifeline Systems are the unsung heroes of permanent fall protection, offering a continuous layer of safety for those who work at height. What is a Fixed Lifeline System? Imagine a sturdy, high-strength cable, rigid rail, or track permanently installed along a roof edge, atop a parapet, or up the side of a structure. Workers connect their full-body harnesses to this system via a traveling shuttle or trolley. This setup allows them to move freely along the entire length of the system, all while remaining securely attached. KEY FEATURE: Unlike portable lanyards that need to be constantly disconnected and reconnected creating dangerous periods of exposure a fixed lifeline provides 100% tie-off, 100% of the time. Why Go Fixed? The Unbeatable Advantages. Choosing a fixed lifeline system is not just about compliance; it is about committing to a culture of safety. Here is why they are a superior solution for many work environments. Where Do Fixed Lifeline Systems Shine? You will find these systems wherever there is a recurring need for work at height. The Anatomy of a Safe Installation: It is More Than Just a Cable. A reliable fixed lifeline system is not something you simply bolt down. It is a carefully planned process: Risk Assessment and Design: A qualified engineer assesses the site and designs a system for complete coverage. Quality Components: All parts must be rated for the potential forces of a fall arrest. Professional Installation: Critical to ensure the system performs as intended. Training and Inspection: Workers must be trained, and the system must be regularly inspected. The Final Word: An Investment in People. A Fixed Lifeline System is more than just equipment; it is a permanent statement that the safety of your team is non-negotiable. It is the silent guardian on the high steel and the peace of mind for everyone on the ground. By investing in a properly designed and installed fixed lifeline, you are not just preventing falls you are building a foundation of trust and security that allows your business to reach new heights, safely. Ready to explore how a fixed lifeline system can protect your team? Contact a qualified fall protection specialist today for a site assessment.', '1', '1', '2025-03-10 14:21:19', '2025-10-27 17:24:15'),
(8, '1761563636_2.png', 'Beyond the Extinguisher: Building Complete Fire Safety Ecosystem', 'beyond-the-extinguisher-building-complete-fire-safety-ecosystem', 'Beyond the Extinguisher: Building Your Complete Fire Safety Ecosystem. For decades, the fire extinguisher has been the iconic symbol of workplace fire safety. But what if we told you that relying on that red cylinder alone is like having a band-aid for a system-wide health crisis? True fire safety is not a single device; it is a multi-layered ecosystem designed to prevent, detect, contain, and evacuate. It is time to think beyond the extinguisher and build a comprehensive defense strategy that protects your people, assets, and continuity. The Four Pillars of a Fire Safety Ecosystem. A robust fire safety plan rests on four critical pillars, working in harmony: Pillar 1: Prevention and Mitigation (Proactive Defense). Pillar 2: Detection and Alert (Early Warning). Pillar 3: Suppression and Containment (Active Response). Pillar 4: Evacuation and Communication (Life Safety). Pillar 1: Prevention and Mitigation - Stopping Fire Before It Starts. This is your first and most crucial line of defense. Prevention focuses on eliminating hazards before they can ignite. Electrical Safety: Regular inspections of wiring, panels, and equipment to prevent one of the most common causes of industrial fires. Housekeeping and Storage: Proper storage of flammable materials and combustible waste. A cluttered facility is a fuel-rich environment. Hot Work Programs: Strict protocols and permits for activities like welding, grinding, and cutting. Employee Training: Educating staff on fire hazards specific to their tasks and workspace. Pillar 2: Detection and Alert - The Critical First Seconds. When prevention fails, early detection is everything. This layer ensures a fire is discovered at the smoldering stage, not when it is raging. Smoke and Heat Detectors: A properly designed network of detectors provides the earliest possible warning. Alarm Systems: Audible and visual alarms (strobes) that are unmistakable throughout the entire facility, including high-noise areas. Emergency Communication Systems: These systems do more than sound an alarm; they provide clear, automated voice instructions to guide occupants. Pillar 3: Suppression and Containment - Controlling the Outbreak. This is where the fire extinguisher plays its role as one part of a much larger system. Fire Extinguishers: The right type (A, B, C, D, K) placed in accessible locations, with trained staff ready to use them on incipient fires. Automatic Sprinkler Systems: The true workhorses of fire suppression. They control or extinguish fires 96% of the time, often before the fire department even arrives. Fire Doors and Partitions: Passive fire protection that compartmentalizes a building, slowing the spread of smoke and flames to protect escape routes and adjacent areas. Pillar 4: Evacuation and Communication - Ensuring Everyone Gets Out Safe. All other measures are meaningless if people cannot escape. This pillar is solely focused on life safety. Clear Egress Paths: Well-marked, unobstructed, and adequately lit exit routes leading to a place of safety. Emergency Lighting: Illuminates escape paths when primary power fails. Accountability Systems: Designated meeting points, visitor logs, and employee training for headcounts after evacuation. Regular Drills: Practice makes perfect. Drills build muscle memory and reduce panic in a real emergency. Integration is Key: How the Ecosystem Works Together. Imagine a fire starts in a storage closet. Here is the ecosystem in action: Detection: A smoke detector senses the fire and signals the alarm panel. Alert and Communication: The panel triggers horns and strobes, and the emergency communication system broadcasts: A fire has been reported. Proceed to the nearest exit. Containment: A self-closing fire door contains the smoke and flames within the closet. Suppression: The heat from the fire activates a single sprinkler head directly over the fire, suppressing it. Evacuation: Employees, trained through regular drills, calmly proceed along lit egress paths to their designated assembly point. No single device could have achieved this outcome. The integrated system did. Building Your Ecosystem: A Call to Action. Moving beyond the extinguisher requires a shift from reactive compliance to proactive risk management. Your Next Steps: Conduct a Risk Assessment: Identify the unique fire hazards in your facility. Audit Your Existing Systems: Are all four pillars present, integrated, and well-maintained? Prioritize Training and Drills: Your people are the most important component of your ecosystem. Partner with Experts: Work with fire safety professionals to design, install, and maintain your complete ecosystem. Do not just place a band-aid on a critical risk. Build a resilient, intelligent fire safety ecosystem that ensures when seconds count, your entire organization is ready. Is your fire safety strategy a single tool or a complete ecosystem? Contact a fire safety specialist today to schedule a comprehensive site assessment.', '1', '1', '2025-10-27 16:43:56', '2025-10-27 17:24:34'),
(9, '1761563843_3.png', 'Your Second Skin: Complete Guide to Personal Protective Equipment', 'your-second-skin-complete-guide-to-personal-protective-equipment', 'Your Second Skin: The Complete Guide to Personal Protective Equipment (PPE). In any workplace where hazards cannot be completely engineered out, Personal Protective Equipment becomes your second skin the critical barrier between you and potential harm. This comprehensive guide will walk you through everything you need to know about building your PPE strategy. Understanding the PPE Hierarchy. Remember: PPE is the last line of defense. It should complement other safety measures like engineering controls and administrative controls. The Major Categories of PPE. 1. Head Protection. When needed: Falling objects, overhead hazards, electrical exposure. Key equipment: Hard hats, bump caps, helmets. Classes: G (General), E (Electrical), C (Conductive). Maintenance: Regular inspection for dents, cracks, and UV damage. 2. Eye and Face Protection. When needed: Flying particles, chemical splashes, radiation. Key equipment: Safety glasses, goggles, face shields, welding helmets. Selection: Match protection type to specific hazard. Critical: Always ensure proper fit and complete coverage. 3. Hearing Protection. When needed: Noise levels above 85 dBA. Key equipment: Earplugs, earmuffs, semi-insert devices. Selection: Match NRR to noise environment, consider comfort. Training: Proper insertion techniques essential. 4. Respiratory Protection. When needed: Dust, fumes, vapors, oxygen-deficient atmospheres. Key equipment: Disposable to full-face respirators, supplied-air systems. Requirements: Medical evaluation, fit testing, comprehensive training. Maintenance: Regular cartridge changes and cleaning. 5. Hand Protection. When needed: Chemical exposure, cuts, abrasions, temperature extremes. Key equipment: Chemical-resistant, cut-resistant, thermal gloves. Selection: Match material to specific hazards, ensure proper sizing. Inspection: Check for tears and degradation before each use. 6. Body Protection. When needed: Chemical exposure, extreme temperatures, impact hazards. Key equipment: Coveralls, aprons, lab coats, high-visibility clothing. Selection: Choose materials based on specific hazards. Fit: Ensure proper fit without restriction. 7. Foot Protection. When needed: Falling objects, electrical hazards, slippery surfaces. Key equipment: Steel-toe boots, metatarsal guards, electrical-hazard shoes. Selection: Match protection to workplace hazards. Comfort: Consider all-day wear requirements. Building an Effective PPE Program. 1. Hazard Assessment. Conduct thorough workplace assessments to identify all potential hazards. 2. Proper Selection. Choose PPE that provides adequate protection, fits properly, and does not create new hazards. 3. Employee Training. Train workers on when PPE is necessary, how to use it properly, and its limitations. 4. Fit Testing and Comfort. Ensure proper fit through individual assessment and address comfort concerns. 5. Maintenance and Replacement. Establish procedures for cleaning, inspection, storage, and timely replacement. Common PPE Mistakes to Avoid. One-size-fits-all approach. Mixing incompatible equipment. Poor maintenance. Inadequate training. Complacency with quick jobs. PPE Program Checklist. Conducted hazard assessment. Selected appropriate PPE for each hazard. Established fit testing procedures. Developed comprehensive training program. Created maintenance and replacement schedule. Implemented compliance monitoring. Scheduled regular program reviews. The Bottom Line. Your PPE is more than just equipment it is your second skin, your personal protection system that goes with you wherever the hazards are. A well-planned PPE program demonstrates a genuine commitment to worker safety and well-being. Remember: The most expensive PPE is the kind that sits unused. Invest in the right equipment, proper training, and a strong safety culture. Ready to enhance your PPE program? Contact our safety specialists for a comprehensive assessment of your protective equipment needs.', '1', '1', '2025-10-27 16:47:23', '2025-10-27 17:24:51'),
(10, '1761564013_4.png', 'Knowledge is Safety: Critical Role of Professional Safety Training', 'knowledge-is-safety-critical-role-of-professional-safety-training', 'Knowledge is Safety: The Critical Role of Professional Safety Training. In todays complex work environments, safety is no longer just about following rules it is about understanding risks, making smart decisions, and creating a culture where every employee returns home safely each day. Beyond Compliance: Why Training Matters More Than Ever. Effective safety training goes far beyond checking regulatory boxes: Empowers employees to recognize and respond to hazards. Builds confidence to speak up about unsafe conditions. Creates critical thinkers who can assess risks in real-time. Fosters a safety culture that becomes organizational DNA. The Real Cost of Inadequate Training. Human Cost: Workplace injuries and fatalities. Financial Impact: Workers compensation claims and productivity losses. Reputational Damage: Loss of client trust and talent attraction issues. Operational Disruption: Project delays and increased insurance costs. Key Components of Effective Safety Training. 1. Hazard-Specific Training. Industry-specific risks. Equipment-specific protocols. Environment-specific challenges. Task-specific procedures. 2. Hands-On Practical Exercises. Real-world scenario practice. Equipment operation drills. Emergency response simulations. Muscle memory development. 3. Continuous Learning Approach. Regular refresher courses. Updates for new equipment and procedures. Lessons learned from near-misses. Ongoing skill validation. 4. Engagement and Retention Strategies. Interactive learning methods. Real-life case studies. Practical applications. Regular knowledge checks. The Training Spectrum: From New Hire to Seasoned Pro. For New Employees. Foundation safety principles. Company-specific protocols. Emergency procedures. Reporting mechanisms. For Experienced Workers. Advanced hazard recognition. Mentorship training. Incident investigation skills. Safety leadership development. For Supervisors and Managers. Legal responsibilities. Risk assessment techniques. Safety program management. Cultural leadership skills. Measuring Training Effectiveness. Reduced incident rates. Improved safety observations. Increased near-miss reporting. Enhanced safety conversations. Better compliance audits. Building a Learning Culture. Toolbox talks and safety moments. Peer-to-peer coaching. Cross-training opportunities. Continuous improvement feedback loops. The ROI of Safety Training. Reduced workers compensation costs. Lower equipment repair and replacement. Increased productivity and uptime. Improved employee retention. Enhanced company reputation. Your Training Action Plan. Assess current training gaps and needs. Develop a comprehensive training matrix for all roles. Choose qualified instructors with relevant experience. Implement a mix of delivery methods. Establish clear metrics for measuring effectiveness. Create a continuous improvement cycle. The Bottom Line: Knowledge Saves Lives. Professional safety training is not an expense it is an investment in your most valuable asset: your people. When employees understand not just what to do, but why they are doing it, they become active participants in their own safety. Ready to build a safer workplace through knowledge? Contact our safety training specialists to develop a customized program that addresses your unique risks and transforms your safety culture. Remember: In the world of workplace safety, what you do not know can hurt you. Invest in knowledge it is the one safety tool that never wears out.', '1', '1', '2025-10-27 16:50:14', '2025-10-27 17:25:03');

CREATE TABLE `tb1_catalogue` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb1_category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_category` (`id`, `category`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(1, 'Others', '1', '1', '2025-03-06 16:00:14', '2025-03-06 16:00:14');

CREATE TABLE `tb1_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_contact` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sadf', 'seyfertdeveloperteam@gmail.com', 'asdf', 'asdf', '1', '2025-07-16 13:23:20', '2025-07-16 13:23:20');

CREATE TABLE `tb1_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb1_gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `category_id` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_gallery` (`id`, `image`, `category_id`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(35, '1761566793_1.png', '1', '1', '1', '2025-10-27 12:06:34', '2025-10-27 12:06:34'),
(36, '1761566794_2.png', '1', '1', '1', '2025-10-27 12:06:34', '2025-10-27 12:06:34'),
(37, '1761568008_3.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(38, '1761568008_4.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(39, '1761568008_5.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(40, '1761568008_6.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(41, '1761568008_7.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(42, '1761568008_8.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48');

CREATE TABLE `tb1_latest_news` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_latest_news` (`id`, `message`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Executive Inn, Pondicherry – Call or WhatsApp us to Book Now!', '1', '1', '2025-03-06 11:26:59', '2025-07-16 11:12:37');

CREATE TABLE `tb1_mainproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb1_mainproduct` (`id`, `product_name`, `description`, `image`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(8, 'Snake Catcher', 'Durable and lightweight snake catcher made from stainless steel with a comfortable red handle and non-slip rubber jaw for a firm, gentle grip. Ideal for safely catching and releasing snakes at home, in gardens, or during rescue operations.', '1761557114_blob.png', '1', '1', '2025-10-27 14:55:14', '2025-10-27 14:55:14'),
(9, 'Under Vehicle Mirror', 'Durable and lightweight inspection mirror designed for security checks under vehicles. Features a wide convex mirror for a clear, wide-angle view and an adjustable handle for easy maneuvering. Ideal for use in security checkpoints, parking lots, and inspection areas.', '1761557340_blob.png', '1', '1', '2025-10-27 14:59:00', '2025-10-27 14:59:00'),
(10, 'Emergency light', 'Bright and energy-efficient emergency light with long-lasting LED bulbs. Features a rechargeable battery, durable body, and easy portability. Ideal for homes, offices, and outdoor use during power cuts or emergencies.', '1761557712_blob.png', '1', '1', '2025-10-27 15:05:12', '2025-10-27 15:05:12'),
(11, 'Spark Arrester', 'Durable and efficient device designed to prevent sparks from escaping exhaust systems, reducing fire hazards. Made from high-quality stainless steel for long-lasting performance, it is ideal for generators, engines, and industrial equipment operating in fire-prone areas.', '1761558873_blob.png', '1', '1', '2025-10-27 15:24:33', '2025-10-27 15:24:33'),
(12, 'Environmental & Safety Measuring Instruments', 'Accurate and easy-to-use device for measuring noise levels in decibels (dB). Ideal for monitoring sound in workplaces, factories, construction sites, and environmental studies. Features a clear digital display, wide measuring range, and high sensitivity for precise sound analysis.', '1761559147_blob.png', '1', '1', '2025-10-27 15:29:07', '2025-10-27 15:29:07'),
(13, 'Breathing Apparatus & Safety Equipment', 'Powerful and portable blower designed to remove smoke, fumes, and toxic gases from confined or hazardous areas. Made with a durable body and high-speed motor for efficient ventilation. Ideal for firefighting, industrial maintenance, and emergency rescue operations to ensure clean air and safe working conditions.', '1761559405_blob.png', '1', '1', '2025-10-27 15:33:25', '2025-10-27 15:33:25'),
(14, 'Signages', 'Durable and highly visible safety signages designed to convey warnings, directions, and safety instructions in workplaces. Made from quality materials for indoor and outdoor use, these signboards help prevent accidents and ensure compliance with safety regulations. Ideal for factories, construction sites, offices, and public areas.', '1761559607_blob.png', '1', '1', '2025-10-27 15:36:47', '2025-10-27 15:36:47'),
(15, 'Industrial Spill Management Equipment', 'Strong and chemical-resistant pallet designed to safely store drums and containers, preventing hazardous liquid spills and leaks. Features a leak-proof sump for easy collection and cleanup. Ideal for warehouses, laboratories, and industrial facilities handling oils, chemicals, or fuels.', '1761559919_blob.png', '1', '1', '2025-10-27 15:41:59', '2025-10-27 15:41:59'),
(16, 'Solar Delineator', 'High-visibility road safety device powered by solar energy, designed to guide drivers in low-light or nighttime conditions. Features bright LED lights with automatic charging and dusk-to-dawn operation. Durable, weather-resistant, and easy to install ideal for highways, curves, medians, and construction zones.', '1761560281_blob.png', '1', '1', '2025-10-27 15:48:01', '2025-10-27 15:48:01'),
(17, 'Barricading Net', 'Durable and high-visibility safety net used for marking restricted or hazardous areas. Made from strong, weather-resistant plastic material, it is lightweight, reusable, and easy to install. Ideal for construction sites, road works, and crowd control applications.', '1761564121_blob.png', '1', '1', '2025-10-27 16:52:01', '2025-10-27 16:52:01');


--
-- Table structure for table `tb1_subproduct`
--

CREATE TABLE `tb1_subproduct` (
  `id` int(11) NOT NULL,
  `main_product_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_subproduct`
--

INSERT INTO `tb1_subproduct`
(`id`, `main_product_id`, `name`, `price`, `description`, `image`, `url`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(5, '8', 'Snake Catcher', '100', 'Durable and lightweight snake catcher made from stainless steel with a comfortable red handle and non-slip rubber jaw for a firm, gentle grip. Ideal for safely catching and releasing snakes at home, in gardens, or during rescue operations.', '1761557181_blob.png', 'snake-catcher', '1', '1', '2025-10-27 14:56:21', '2025-10-27 14:56:21'),
(6, '9', 'Under Vehicle Mirror', '100', 'Durable and lightweight inspection mirror designed for security checks under vehicles. Features a wide convex mirror for a clear, wide-angle view and an adjustable handle for easy maneuvering. Ideal for use in security checkpoints, parking lots, and inspection areas.', '1761557418_blob.png', 'under-vehicle-mirror', '1', '1', '2025-10-27 15:00:18', '2025-10-27 15:00:18'),
(7, '10', 'Stealthlite 2450', '100', 'High-performance LED flashlight designed for tough environments. The StealthLite 2450 offers powerful brightness, durable construction, and is water- and corrosion-resistant. Powered by rechargeable batteries, it delivers reliable illumination for industrial, marine, and emergency use.', '1761557796_blob.png', 'stealthlite-2450', '1', '1', '2025-10-27 15:06:36', '2025-10-27 15:06:36'),
(8, '11', 'Spark Arrester', '100', 'Durable and efficient device designed to prevent sparks from escaping exhaust systems, reducing fire hazards. Made from high-quality stainless steel for long-lasting performance, it’s ideal for generators, engines, and industrial equipment operating in fire-prone areas.', '1761558914_blob.png', 'spark-arrester', '1', '1', '2025-10-27 15:25:14', '2025-10-27 15:25:14'),
(9, '12', 'Sound Level Meter', '100', 'Accurate and easy-to-use device for measuring noise levels in decibels (dB). Ideal for monitoring sound in workplaces, factories, construction sites, and environmental studies. Features a clear digital display, wide measuring range, and high sensitivity for precise sound analysis.', '1761559192_blob.png', 'sound-level-meter', '1', '1', '2025-10-27 15:29:52', '2025-10-27 15:29:52'),
(10, '13', 'Smoke and fume exhausting blower', '100', 'Powerful and portable blower designed to remove smoke, fumes, and toxic gases from confined or hazardous areas. Made with a durable body and high-speed motor for efficient ventilation. Ideal for firefighting, industrial maintenance, and emergency rescue operations to ensure clean air and safe working conditions.', '1761559445_blob.png', 'smoke-and-fume-exhausting-blower', '1', '1', '2025-10-27 15:34:05', '2025-10-27 15:34:05'),
(11, '14', 'Signages', '100', 'Durable and highly visible safety signages designed to convey warnings, directions, and safety instructions in workplaces. Made from quality materials for indoor and outdoor use, these signboards help prevent accidents and ensure compliance with safety regulations. Ideal for factories, construction sites, offices, and public areas.', '1761559707_blob.png', 'signages-', '1', '1', '2025-10-27 15:38:27', '2025-10-27 15:38:27'),
(12, '15', 'spill containment pallet', '100', 'Strong and chemical-resistant pallet designed to safely store drums and containers, preventing hazardous liquid spills and leaks. Features a leak-proof sump for easy collection and cleanup. Ideal for warehouses, laboratories, and industrial facilities handling oils, chemicals, or fuels.', '1761559993_blob.png', 'spill-containment-pallet', '1', '1', '2025-10-27 15:43:13', '2025-10-27 15:43:13'),
(13, '15', 'barrell dolly', '100', 'Heavy-duty and easy-to-maneuver trolley designed for safely transporting drums and barrels. Built with sturdy wheels and a strong steel frame for smooth movement and stability. Ideal for warehouses, factories, and chemical plants to handle heavy barrels with ease and reduce manual effort.', '1761560178_blob.png', 'barrell-dolly', '1', '1', '2025-10-27 15:46:18', '2025-10-27 15:46:18'),
(14, '16', 'Solar-Delineator', '100', 'High-visibility road safety device powered by solar energy, designed to guide drivers in low-light or nighttime conditions. Features bright LED lights with automatic charging and dusk-to-dawn operation. Durable, weather-resistant, and easy to install—ideal for highways, curves, medians, and construction zones.', '1761560321_blob.png', 'solar-delineator', '1', '1', '2025-10-27 15:48:41', '2025-10-27 15:48:41'),
(15, '10', 'Halogen Search Lights', '100', 'Powerful and durable search light equipped with a high-intensity halogen bulb for bright, long-range illumination. Designed for outdoor, rescue, and security operations, it offers a strong beam, sturdy handle, and rechargeable battery. Ideal for police, marine, industrial, and emergency use.', '1761564070_blob.png', 'halogen-search-lights', '1', '1', '2025-10-27 16:51:10', '2025-10-27 16:51:10'),
(16, '17', 'Barricading Net', '100', 'Durable and high-visibility safety net used for marking restricted or hazardous areas. Made from strong, weather-resistant plastic material, it is lightweight, reusable, and easy to install. Ideal for construction sites, road works, and crowd control applications.', '1761564189_blob.png', 'barricading-net', '1', '1', '2025-10-27 16:53:09', '2025-10-27 16:53:09');


ALTER TABLE `tb1_admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_blog`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_catalogue`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_contact`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_enquiry`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_gallery`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_latest_news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_mainproduct`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_subproduct`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb1_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tb1_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tb1_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tb1_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tb1_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tb1_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `tb1_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

ALTER TABLE `tb1_latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tb1_mainproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `tb1_subproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

