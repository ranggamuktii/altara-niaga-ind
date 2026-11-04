/**
 * Altara Niaga Indonesia — Global Trade & Logistics Platform
 * ─────────────────────────────────────────────────────────────
 * Features: Mobile menu, navbar scroll effect, smooth scroll,
 * scroll animations, and interactive Gamified Trade Simulator.
 */

import '../css/app.css';

document.addEventListener("DOMContentLoaded", () => {
    // ── Mobile Menu Toggle ──────────────────────────────────────────────
    const mobileToggle = document.querySelector("[data-mobile-toggle]");
    const mobileMenu = document.querySelector("[data-mobile-menu]");

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener("click", () => {
            const isOpen = !mobileMenu.classList.contains("hidden");

            if (isOpen) {
                mobileMenu.classList.add("hidden");
                mobileToggle.setAttribute("aria-expanded", "false");
                mobileToggle
                    .querySelector(".hamburger-open")
                    ?.classList.remove("hidden");
                mobileToggle
                    .querySelector(".hamburger-close")
                    ?.classList.add("hidden");
            } else {
                mobileMenu.classList.remove("hidden");
                mobileToggle.setAttribute("aria-expanded", "true");
                mobileToggle
                    .querySelector(".hamburger-open")
                    ?.classList.add("hidden");
                mobileToggle
                    .querySelector(".hamburger-close")
                    ?.classList.remove("hidden");
            }
        });

        // Close mobile menu when a link inside it is clicked
        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                mobileToggle.setAttribute("aria-expanded", "false");
                mobileToggle
                    .querySelector(".hamburger-open")
                    ?.classList.remove("hidden");
                mobileToggle
                    .querySelector(".hamburger-close")
                    ?.classList.add("hidden");
            });
        });
    }

    // ── Navbar Scroll Effect ────────────────────────────────────────────
    const navbar = document.querySelector("[data-navbar]");

    if (navbar) {
        const scrollClasses = [
            "border-neutral-700",
            "bg-[#000000]/95",
            "shadow-2xl",
        ];

        const handleScroll = () => {
            if (window.scrollY > 30) {
                navbar.classList.add(...scrollClasses);
            } else {
                navbar.classList.remove(...scrollClasses);
            }
        };

        window.addEventListener("scroll", handleScroll, { passive: true });
        handleScroll();
    }

    // ── Smooth Scroll for Anchor Links ──────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", (e) => {
            const targetId = anchor.getAttribute("href");

            if (targetId === "#") return;

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });

    // ── Scroll-Triggered Fade-In Animation ──────────────────────────────
    const animatedElements = document.querySelectorAll("[data-animate]");

    if (animatedElements.length > 0) {
        animatedElements.forEach((el) => {
            el.style.opacity = "0";
            el.style.transform = "translateY(24px)";
            el.style.transition =
                "opacity 0.6s ease-out, transform 0.6s ease-out";
        });

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = "1";
                        entry.target.style.transform = "translateY(0)";
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.15,
                rootMargin: "0px 0px -40px 0px",
            },
        );

        animatedElements.forEach((el) => observer.observe(el));
    }

    // ── Gamified Trade Route & Freight Simulator ────────────────────────
    initTradeSimulator();

    // ── Enterprise Fleet Showcase & RFQ Integration ────────────────────────
    initFleetShowcase();
});

function initTradeSimulator() {
    const simulator = document.querySelector("[data-trade-simulator]");
    if (!simulator) return;

    // State
    const state = {
        mode: "ocean",
        originId: "IDJKT",
        originName: "Port of Tanjung Priok (IDJKT)",
        destId: "NLRTM",
        destName: "Port of Rotterdam (NLRTM)",
        days: "18 - 22 Days",
        miles: "8,450 NM",
        corridor: "Malacca-Suez Maritime Corridor",
        container: "40ft High-Cube FCL (76.4 CBM / 28.8 MT)",
        containerMetric: "76.4 CBM • 28,800 kg max",
        incoterm: "CIF",
        sellerRisk: 75,
        buyerRisk: 25,
    };

    const activeClasses = [
        "border-white",
        "bg-white",
        "text-black",
        "font-semibold",
    ];
    const inactiveClasses = [
        "border-neutral-800",
        "bg-neutral-900/60",
        "text-neutral-400",
        "font-medium",
    ];

    function updateButtonGroup(container, activeBtn) {
        container.querySelectorAll("button").forEach((btn) => {
            btn.classList.remove(...activeClasses);
            btn.classList.add(...inactiveClasses);
        });
        activeBtn.classList.remove(...inactiveClasses);
        activeBtn.classList.add(...activeClasses);
    }

    // 1. Freight Mode Switcher
    const modeGroup = simulator.querySelector("[data-mode-group]");
    if (modeGroup) {
        modeGroup.querySelectorAll("button").forEach((btn) => {
            btn.addEventListener("click", () => {
                state.mode = btn.getAttribute("data-mode");
                updateButtonGroup(modeGroup, btn);

                const transitDaysEl = simulator.querySelector(
                    "[data-transit-days]",
                );
                if (state.mode === "air") {
                    transitDaysEl.textContent = "2 - 4 Days";
                } else if (state.mode === "multimodal") {
                    transitDaysEl.textContent = "12 - 16 Days";
                } else {
                    transitDaysEl.textContent = state.days;
                }
            });
        });
    }

    // 2. Origin Port Selector
    const originGroup = simulator.querySelector("[data-origin-group]");
    const originLabel = simulator.querySelector("[data-origin-label]");
    const svgOriginText = simulator.querySelector("[data-svg-origin]");

    if (originGroup) {
        originGroup.querySelectorAll("button").forEach((btn) => {
            btn.addEventListener("click", () => {
                state.originId = btn.getAttribute("data-port-id");
                state.originName = btn.getAttribute("data-port-name");
                updateButtonGroup(originGroup, btn);

                if (originLabel)
                    originLabel.textContent = `${btn.querySelector(".font-bold").textContent} (${state.originId})`;
                if (svgOriginText) svgOriginText.textContent = state.originId;
                updateCoordinatesDisplay();
            });
        });
    }

    // 3. Destination Port Selector
    const destGroup = simulator.querySelector("[data-dest-group]");
    const destLabel = simulator.querySelector("[data-dest-label]");
    const svgDestText = simulator.querySelector("[data-svg-dest]");
    const transitDays = simulator.querySelector("[data-transit-days]");
    const transitMiles = simulator.querySelector("[data-transit-miles]");
    const routeCorridor = simulator.querySelector("[data-route-corridor]");

    if (destGroup) {
        destGroup.querySelectorAll("button").forEach((btn) => {
            btn.addEventListener("click", () => {
                state.destId = btn.getAttribute("data-port-id");
                state.destName = btn.getAttribute("data-port-name");
                state.days = btn.getAttribute("data-days") + " Days";
                state.miles = btn.getAttribute("data-miles") + " NM";
                state.corridor = btn.getAttribute("data-corridor");

                updateButtonGroup(destGroup, btn);

                if (destLabel)
                    destLabel.textContent = `${btn.querySelector(".font-bold").textContent} (${state.destId})`;
                if (svgDestText) svgDestText.textContent = state.destId;
                if (transitDays) {
                    transitDays.textContent =
                        state.mode === "air" ? "2 - 4 Days" : state.days;
                }
                if (transitMiles) transitMiles.textContent = state.miles;
                if (routeCorridor) routeCorridor.textContent = state.corridor;

                updateCoordinatesDisplay();
            });
        });
    }

    function updateCoordinatesDisplay() {
        const coordsEl = simulator.querySelector("[data-coords]");
        if (!coordsEl) return;
        const portCoords = {
            IDJKT: "06°06'S, 106°52'E",
            IDSUB: "07°12'S, 112°44'E",
            MYPKG: "03°00'N, 101°24'E",
            SGSIN: "01°18'N, 103°51'E",
            NLRTM: "51°55'N, 04°29'E",
            CNSHA: "31°13'N, 121°30'E",
            USLAX: "33°44'N, 118°15'W",
            AEDXB: "24°59'N, 55°03'E",
            DEHAM: "53°32'N, 09°59'E",
        };
        const orig = portCoords[state.originId] || "06°06'S, 106°52'E";
        const dest = portCoords[state.destId] || "51°55'N, 04°29'E";
        coordsEl.textContent = `${orig} → ${dest}`;
    }

    // 4. Container Allocation Selector
    const containerGroup = simulator.querySelector("[data-container-group]");
    const containerMetric = simulator.querySelector("[data-container-metric]");
    const fillBar = simulator.querySelector("[data-fill-bar]");
    const fillText = simulator.querySelector("[data-fill-text]");

    if (containerGroup) {
        containerGroup.querySelectorAll("button").forEach((btn) => {
            btn.addEventListener("click", () => {
                state.container = btn.getAttribute("data-container");
                state.containerMetric = btn.getAttribute("data-metric");
                const fillPercent = btn.getAttribute("data-fill") || "75%";

                updateButtonGroup(containerGroup, btn);

                if (containerMetric)
                    containerMetric.textContent = state.containerMetric;
                if (fillBar) fillBar.style.width = fillPercent;
                if (fillText)
                    fillText.textContent = `${btn.querySelector(".font-bold").textContent} (${fillPercent})`;
            });
        });
    }

    // 5. Incoterms Risk Selector
    const incotermGroup = simulator.querySelector("[data-incoterm-group]");
    const incotermDesc = simulator.querySelector("[data-incoterm-desc]");
    const sellerBar = simulator.querySelector("[data-seller-bar]");
    const buyerBar = simulator.querySelector("[data-buyer-bar]");
    const sellerPercent = simulator.querySelector("[data-seller-percent]");
    const buyerPercent = simulator.querySelector("[data-buyer-percent]");

    if (incotermGroup) {
        incotermGroup.querySelectorAll("button").forEach((btn) => {
            btn.addEventListener("click", () => {
                state.incoterm = btn.getAttribute("data-incoterm");
                state.sellerRisk = parseInt(
                    btn.getAttribute("data-seller-risk"),
                    10,
                );
                state.buyerRisk = parseInt(
                    btn.getAttribute("data-buyer-risk"),
                    10,
                );
                const desc = btn.getAttribute("data-desc");

                updateButtonGroup(incotermGroup, btn);

                if (incotermDesc) incotermDesc.textContent = desc;
                if (sellerBar) sellerBar.style.width = `${state.sellerRisk}%`;
                if (buyerBar) buyerBar.style.width = `${state.buyerRisk}%`;
                if (sellerPercent)
                    sellerPercent.textContent = `${state.sellerRisk}% Responsibility`;
                if (buyerPercent)
                    buyerPercent.textContent = `${state.buyerRisk}% Responsibility`;
            });
        });
    }

    // 6. Action Bridge: Transfer Configuration to RFQ Form
    const applyRfqBtn = simulator.querySelector("[data-apply-rfq]");
    const applyRfqText = simulator.querySelector("[data-apply-rfq-text]");

    if (applyRfqBtn) {
        applyRfqBtn.addEventListener("click", () => {
            const rfqSection = document.querySelector("#rfq");
            if (!rfqSection) return;

            // 1. Populate RFQ Form Inputs
            const originInput = rfqSection.querySelector(
                'input[name="origin_port"]',
            );
            const destInput = rfqSection.querySelector(
                'input[name="destination_port"]',
            );
            const incotermSelect = rfqSection.querySelector(
                'select[name="incoterm"]',
            );
            const volumeInput = rfqSection.querySelector(
                'input[name="cargo_volume"]',
            );
            const tradeTypeRadios = rfqSection.querySelectorAll(
                'input[name="trade_type"]',
            );

            if (originInput) originInput.value = state.originName;
            if (destInput) destInput.value = state.destName;
            if (volumeInput) volumeInput.value = state.container;
            if (incotermSelect) incotermSelect.value = state.incoterm;

            if (tradeTypeRadios.length > 0) {
                const targetRadio = rfqSection.querySelector(
                    `input[name="trade_type"][value="${state.mode === "air" || state.mode === "ocean" ? "export" : "freight_only"}"]`,
                );
                if (targetRadio) {
                    targetRadio.checked = true;
                    targetRadio.dispatchEvent(new Event("change"));
                }
            }

            // 2. Feedback Animation on Button
            if (applyRfqText) {
                const originalText = applyRfqText.textContent;
                applyRfqText.textContent =
                    "✓ Transferred! Scroll to Review & Submit";
                applyRfqBtn.classList.add("bg-emerald-400", "text-black");
                applyRfqBtn.classList.remove("bg-white");

                setTimeout(() => {
                    applyRfqText.textContent = originalText;
                    applyRfqBtn.classList.remove("bg-emerald-400");
                    applyRfqBtn.classList.add("bg-white");
                }, 3000);
            }

            // 3. Smooth scroll down to RFQ section
            rfqSection.scrollIntoView({ behavior: "smooth", block: "start" });

            // 4. Highlight flash on RFQ form card
            const formCard = rfqSection.querySelector("form")?.closest("div");
            if (formCard) {
                formCard.classList.remove("rfq-highlight-flash");
                void formCard.offsetWidth; // trigger reflow
                formCard.classList.add("rfq-highlight-flash");
            }

            // Focus on contact name input
            const nameInput = rfqSection.querySelector('input[name="name"]');
            if (nameInput) {
                setTimeout(() => nameInput.focus(), 600);
            }
        });
    }
}

// ── Enterprise Fleet Showcase & RFQ Integration ──────────────────────────
function initFleetShowcase() {
    const fleetSection = document.querySelector("[data-fleet-showcase]");
    if (!fleetSection) return;

    const applyButtons = fleetSection.querySelectorAll("[data-fleet-apply]");
    applyButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const fleetName = btn.getAttribute("data-fleet-apply");
            const rfqSection = document.querySelector("#rfq");
            if (!rfqSection) return;

            const volumeInput = rfqSection.querySelector(
                'input[name="cargo_volume"]',
            );
            const notesInput =
                rfqSection.querySelector('textarea[name="notes"]') ||
                rfqSection.querySelector("#notes");
            const originInput = rfqSection.querySelector(
                'input[name="origin_port"]',
            );

            if (volumeInput) {
                volumeInput.value = fleetName;
            }
            if (originInput && !originInput.value) {
                originInput.value =
                    "Sentra Industri → Terminal Petikemas Pelabuhan Ekspor";
            }
            if (notesInput) {
                const noteText = `[Kebutuhan Armada: ${fleetName} - Standar Kepatuhan Zero-ODOL & Pabean Jalur Hijau AEO]`;
                if (!notesInput.value.includes(fleetName)) {
                    notesInput.value = notesInput.value
                        ? notesInput.value + "\n" + noteText
                        : noteText;
                }
            }

            // Smooth scroll to RFQ Form
            rfqSection.scrollIntoView({ behavior: "smooth", block: "start" });

            // Flash highlight effect
            const formCard = rfqSection.querySelector("form")?.closest("div");
            if (formCard) {
                formCard.classList.remove("rfq-highlight-flash");
                void formCard.offsetWidth;
                formCard.classList.add("rfq-highlight-flash");
            }

            // Focus on contact name input
            const nameInput = rfqSection.querySelector('input[name="name"]');
            if (nameInput) {
                setTimeout(() => nameInput.focus(), 600);
            }
        });
    });
}
