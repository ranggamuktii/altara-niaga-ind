/**
 * Vanguard Trade — Global Trade & Logistics Platform
 * ─────────────────────────────────────────────────────────────
 * Features: Mobile menu, navbar scroll effect, smooth scroll,
 * scroll animations, and interactive Gamified Trade Simulator.
 */

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
            } else {
                mobileMenu.classList.remove("hidden");
                mobileToggle.setAttribute("aria-expanded", "true");
            }
        });

        // Close mobile menu when a link inside it is clicked
        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                mobileToggle.setAttribute("aria-expanded", "false");
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

    // ── Gamified Mobil & Port Drayage Fleet Dispatch Simulator ────────────
    initFleetDispatchSimulator();
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

    const activeClasses = ["border-white", "bg-white", "text-black", "font-semibold"];
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

                const transitDaysEl = simulator.querySelector("[data-transit-days]");
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

                if (originLabel) originLabel.textContent = `${btn.querySelector(".font-bold").textContent} (${state.originId})`;
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

                if (destLabel) destLabel.textContent = `${btn.querySelector(".font-bold").textContent} (${state.destId})`;
                if (svgDestText) svgDestText.textContent = state.destId;
                if (transitDays) {
                    transitDays.textContent = state.mode === "air" ? "2 - 4 Days" : state.days;
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

                if (containerMetric) containerMetric.textContent = state.containerMetric;
                if (fillBar) fillBar.style.width = fillPercent;
                if (fillText) fillText.textContent = `${btn.querySelector(".font-bold").textContent} (${fillPercent})`;
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
                state.sellerRisk = parseInt(btn.getAttribute("data-seller-risk"), 10);
                state.buyerRisk = parseInt(btn.getAttribute("data-buyer-risk"), 10);
                const desc = btn.getAttribute("data-desc");

                updateButtonGroup(incotermGroup, btn);

                if (incotermDesc) incotermDesc.textContent = desc;
                if (sellerBar) sellerBar.style.width = `${state.sellerRisk}%`;
                if (buyerBar) buyerBar.style.width = `${state.buyerRisk}%`;
                if (sellerPercent) sellerPercent.textContent = `${state.sellerRisk}% Responsibility`;
                if (buyerPercent) buyerPercent.textContent = `${state.buyerRisk}% Responsibility`;
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
            const originInput = rfqSection.querySelector('input[name="origin_port"]');
            const destInput = rfqSection.querySelector('input[name="destination_port"]');
            const incotermSelect = rfqSection.querySelector('select[name="incoterm"]');
            const volumeInput = rfqSection.querySelector('input[name="cargo_volume"]');
            const tradeTypeRadios = rfqSection.querySelectorAll('input[name="trade_type"]');

            if (originInput) originInput.value = state.originName;
            if (destInput) destInput.value = state.destName;
            if (volumeInput) volumeInput.value = state.container;
            if (incotermSelect) incotermSelect.value = state.incoterm;

            if (tradeTypeRadios.length > 0) {
                const targetRadio = rfqSection.querySelector(`input[name="trade_type"][value="${state.mode === 'air' || state.mode === 'ocean' ? 'export' : 'freight_only'}"]`);
                if (targetRadio) {
                    targetRadio.checked = true;
                    targetRadio.dispatchEvent(new Event("change"));
                }
            }

            // 2. Feedback Animation on Button
            if (applyRfqText) {
                const originalText = applyRfqText.textContent;
                applyRfqText.textContent = "✓ Transferred! Scroll to Review & Submit";
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

// ── Gamified Mobil & Port Drayage Fleet Dispatch Engine ───────────────────
function initFleetDispatchSimulator() {
    const simulator = document.querySelector("[data-fleet-simulator]");
    if (!simulator) return;

    // Simulation State
    const fleetState = {
        vehicle: "prime-mover",
        vehicleName: "Heavy Prime Mover 40ft (Gandeng)",
        vehiclePower: "540 HP Diesel Euro 6",
        vehiclePayload: "40ft High-Cube • 32.4 MT",
        maxSpeed: 90,
        speed: 0,
        distance: 0,
        totalDistance: 42.5,
        gear: "P",
        isGasPressed: false,
        isBraking: false,
        isCruising: false,
        completed: false,
    };

    // DOM References
    const activeVehicleTitle = simulator.querySelector("[data-active-vehicle-title]");
    const vehicleButtons = simulator.querySelectorAll("[data-vehicle-selector-group] button");
    const specPower = simulator.querySelector("[data-vehicle-spec-power]");
    const specPayload = simulator.querySelector("[data-vehicle-spec-payload]");

    const gearP = simulator.querySelector("[data-gear-p]");
    const gearR = simulator.querySelector("[data-gear-r]");
    const gearN = simulator.querySelector("[data-gear-n]");
    const gearD = simulator.querySelector("[data-gear-d]");

    const speedMeter = simulator.querySelector("#speed-meter-value");
    const odometer = simulator.querySelector("#odometer-value");
    const etaValue = simulator.querySelector("#eta-value");
    const progressLabel = simulator.querySelector("#progress-percentage-label");
    const progressBar = simulator.querySelector("#progress-bar-fill");
    const statusText = simulator.querySelector("#current-checkpoint-status-text strong");

    const roadStripes = simulator.querySelector("#road-lane-stripes");
    const truckBody = simulator.querySelector("#truck-body");
    const wheels = simulator.querySelectorAll(".truck-wheel");
    const brakeLight = simulator.querySelector("#brake-light-rear");
    const hornEffect = simulator.querySelector("#horn-blast-effect");
    const checkpointMarker = simulator.querySelector("#checkpoint-marker-post");
    const checkpointTag = simulator.querySelector("#checkpoint-tag-text span");

    const btnGas = simulator.querySelector("#btn-gas-pedal");
    const btnBrake = simulator.querySelector("#btn-brake-pedal");
    const btnHorn = simulator.querySelector("#btn-horn");
    const btnCruise = simulator.querySelector("#btn-cruise-dispatch");
    const cruiseLabel = simulator.querySelector("#btn-cruise-label");

    const step1 = simulator.querySelector("#step-checkpoint-1");
    const step2 = simulator.querySelector("#step-checkpoint-2");
    const step3 = simulator.querySelector("#step-checkpoint-3");
    const step4 = simulator.querySelector("#step-checkpoint-4");

    const successBanner = simulator.querySelector("#mission-success-banner");
    const btnTransferRfq = simulator.querySelector("#btn-transfer-truck-to-rfq");
    const btnReplay = simulator.querySelector("#btn-replay-simulator");

    // Gear indicator updater
    function updateGear(g) {
        fleetState.gear = g;
        [gearP, gearR, gearN, gearD].forEach((el) => {
            if (!el) return;
            el.className = "px-1.5 py-0.5 rounded bg-neutral-800 text-neutral-500 font-bold";
        });
        if (g === "P" && gearP) gearP.className = "px-1.5 py-0.5 rounded bg-neutral-200 text-black font-extrabold";
        if (g === "R" && gearR) gearR.className = "px-1.5 py-0.5 rounded bg-red-500 text-white font-extrabold";
        if (g === "N" && gearN) gearN.className = "px-1.5 py-0.5 rounded bg-amber-400 text-black font-extrabold";
        if (g === "D" && gearD) gearD.className = "px-1.5 py-0.5 rounded bg-emerald-400 text-black font-extrabold";
    }

    // Vehicle Switcher
    vehicleButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const vType = btn.getAttribute("data-vehicle");
            fleetState.vehicle = vType;
            fleetState.vehicleName = btn.getAttribute("data-name");
            fleetState.vehiclePower = btn.getAttribute("data-power");
            fleetState.vehiclePayload = btn.getAttribute("data-payload");
            fleetState.maxSpeed = parseInt(btn.getAttribute("data-speed-max"), 10) || 90;

            // Update UI classes
            vehicleButtons.forEach((b) => {
                b.className = "p-4 rounded-2xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]";
                const iconBox = b.querySelector(".w-10");
                if (iconBox) iconBox.className = "w-10 h-10 rounded-xl bg-neutral-800 text-neutral-300 flex items-center justify-center flex-shrink-0 mt-0.5";
                const title = b.querySelector(".font-bold");
                if (title) title.className = "text-sm font-bold text-white leading-tight";
            });

            btn.className = "p-4 rounded-2xl border border-white bg-white text-black text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]";
            const activeIcon = btn.querySelector(".w-10");
            if (activeIcon) activeIcon.className = "w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center flex-shrink-0 mt-0.5";
            const activeTitle = btn.querySelector(".font-bold");
            if (activeTitle) activeTitle.className = "text-sm font-bold text-black leading-tight";

            if (activeVehicleTitle) activeVehicleTitle.textContent = fleetState.vehicleName;
            if (specPower) specPower.textContent = fleetState.vehiclePower;
            if (specPayload) specPayload.textContent = fleetState.vehiclePayload;
        });
    });

    // Klakson / Horn
    if (btnHorn && hornEffect) {
        btnHorn.addEventListener("click", () => {
            hornEffect.classList.remove("opacity-0");
            hornEffect.classList.add("opacity-100");
            if (truckBody) {
                truckBody.style.transform = "translateY(-4px)";
                setTimeout(() => { truckBody.style.transform = "translateY(0)"; }, 150);
            }
            setTimeout(() => {
                hornEffect.classList.remove("opacity-100");
                hornEffect.classList.add("opacity-0");
            }, 650);
        });
    }

    // Gas Pedal Interactions (Click or Hold)
    if (btnGas) {
        const startGas = (e) => {
            if (e) e.preventDefault();
            if (fleetState.completed) return;
            fleetState.isGasPressed = true;
            fleetState.isBraking = false;
            updateGear("D");
            if (brakeLight) brakeLight.style.fill = "#404040";
        };
        const stopGas = () => {
            fleetState.isGasPressed = false;
        };

        btnGas.addEventListener("mousedown", startGas);
        window.addEventListener("mouseup", stopGas);
        btnGas.addEventListener("touchstart", startGas, { passive: false });
        window.addEventListener("touchend", stopGas);
        btnGas.addEventListener("click", () => {
            // Give instant throttle burst on single click
            if (fleetState.completed) return;
            fleetState.speed = Math.min(fleetState.maxSpeed, fleetState.speed + 16);
            updateGear("D");
        });
    }

    // Brake Pedal Interactions
    if (btnBrake) {
        const startBrake = (e) => {
            if (e) e.preventDefault();
            fleetState.isBraking = true;
            fleetState.isGasPressed = false;
            fleetState.isCruising = false;
            if (cruiseLabel) cruiseLabel.textContent = "AUTOPILOT RUN";
            if (brakeLight) brakeLight.style.fill = "#EF4444";
        };
        const stopBrake = () => {
            fleetState.isBraking = false;
            if (brakeLight) brakeLight.style.fill = "#404040";
        };

        btnBrake.addEventListener("mousedown", startBrake);
        window.addEventListener("mouseup", stopBrake);
        btnBrake.addEventListener("touchstart", startBrake, { passive: false });
        window.addEventListener("touchend", stopBrake);
        btnBrake.addEventListener("click", () => {
            fleetState.speed = Math.max(0, fleetState.speed - 30);
            if (fleetState.speed === 0) updateGear("P");
        });
    }

    // Cruise Control / Autopilot Dispatch
    if (btnCruise) {
        btnCruise.addEventListener("click", () => {
            if (fleetState.completed) return;
            fleetState.isCruising = !fleetState.isCruising;
            if (fleetState.isCruising) {
                if (cruiseLabel) cruiseLabel.textContent = "CRUISE AKTIF (MELAJU)";
                btnCruise.classList.add("bg-emerald-500", "text-black");
                btnCruise.classList.remove("bg-emerald-950/40", "text-emerald-300");
                updateGear("D");
            } else {
                if (cruiseLabel) cruiseLabel.textContent = "AUTOPILOT RUN";
                btnCruise.classList.remove("bg-emerald-500", "text-black");
                btnCruise.classList.add("bg-emerald-950/40", "text-emerald-300");
            }
        });
    }

    // Step Status Helper
    function updateStep(stepEl, num, label, isCompleted, isActive) {
        if (!stepEl) return;
        if (isCompleted) {
            stepEl.className = "flex items-center gap-2.5 text-xs text-white";
            stepEl.innerHTML = `
                <span class="w-5 h-5 rounded-full bg-emerald-500 text-black flex items-center justify-center font-bold text-[10px] flex-shrink-0">✓</span>
                <span class="leading-tight font-semibold">${label}</span>
            `;
        } else if (isActive) {
            stepEl.className = "flex items-center gap-2.5 text-xs text-emerald-400";
            stepEl.innerHTML = `
                <span class="w-5 h-5 rounded-full bg-emerald-950 text-emerald-300 border border-emerald-500 flex items-center justify-center font-bold text-[10px] flex-shrink-0 animate-pulse">${num}</span>
                <span class="leading-tight font-bold">${label}</span>
            `;
        } else {
            stepEl.className = "flex items-center gap-2.5 text-xs text-neutral-500";
            stepEl.innerHTML = `
                <span class="w-5 h-5 rounded-full bg-neutral-800 text-neutral-400 border border-neutral-700 flex items-center justify-center font-bold text-[10px] flex-shrink-0">${num}</span>
                <span class="leading-tight">${label}</span>
            `;
        }
    }

    // Simulation Physics Loop (runs every 50ms)
    setInterval(() => {
        if (fleetState.completed) return;

        // Accelerate
        if (fleetState.isGasPressed || fleetState.isCruising) {
            const accelRate = fleetState.isCruising ? 1.8 : 3.0;
            fleetState.speed = Math.min(fleetState.maxSpeed, fleetState.speed + accelRate);
            updateGear("D");
        } else if (fleetState.isBraking) {
            fleetState.speed = Math.max(0, fleetState.speed - 5.5);
            if (fleetState.speed === 0) updateGear("P");
        } else {
            // Natural coasting friction
            if (fleetState.speed > 0) {
                fleetState.speed = Math.max(0, fleetState.speed - 0.7);
                if (fleetState.speed === 0) updateGear("P");
            }
        }

        // Distance advance: speed scaled for interactive pacing
        if (fleetState.speed > 0) {
            fleetState.distance += (fleetState.speed / 3600) * 1.5;
            if (fleetState.distance >= fleetState.totalDistance) {
                fleetState.distance = fleetState.totalDistance;
                fleetState.completed = true;
                fleetState.speed = 0;
                fleetState.isCruising = false;
                updateGear("P");

                // Trigger completion banner
                if (successBanner) successBanner.classList.remove("hidden");
                if (cruiseLabel) cruiseLabel.textContent = "AUTOPILOT RUN";
            }
        }

        // Road Animation Classes
        if (roadStripes) {
            if (fleetState.speed > 55) {
                roadStripes.className = "w-full h-1.5 border-b-2 border-dashed border-neutral-300 animate-road-fast";
            } else if (fleetState.speed > 0) {
                roadStripes.className = "w-full h-1.5 border-b-2 border-dashed border-neutral-400 animate-road-active";
            } else {
                roadStripes.className = "w-full h-1.5 border-b-2 border-dashed border-neutral-600";
            }
        }

        // Truck Bounce & Wheels Spin
        if (truckBody) {
            if (fleetState.speed > 0) {
                truckBody.classList.add("animate-truck-bounce");
            } else {
                truckBody.classList.remove("animate-truck-bounce");
            }
        }

        wheels.forEach((w) => {
            if (fleetState.speed > 55) {
                w.classList.remove("animate-wheel-spin");
                w.classList.add("animate-wheel-spin-fast");
            } else if (fleetState.speed > 0) {
                w.classList.remove("animate-wheel-spin-fast");
                w.classList.add("animate-wheel-spin");
            } else {
                w.classList.remove("animate-wheel-spin", "animate-wheel-spin-fast");
            }
        });

        // Telemetry Displays
        const roundedSpeed = Math.round(fleetState.speed);
        if (speedMeter) speedMeter.textContent = roundedSpeed;
        if (odometer) odometer.textContent = fleetState.distance.toFixed(1) + " KM";

        const remainingKm = Math.max(0, fleetState.totalDistance - fleetState.distance);
        const estMinutes = Math.max(1, Math.round((remainingKm / Math.max(fleetState.speed, 25)) * 60));
        if (etaValue) etaValue.textContent = fleetState.completed ? "TIBA DI PORT" : estMinutes + " MENIT";

        const percent = Math.min(100, Math.round((fleetState.distance / fleetState.totalDistance) * 100));
        if (progressLabel) progressLabel.textContent = percent + "%";
        if (progressBar) progressBar.style.width = percent + "%";

        // Checkpoints Progress
        if (percent < 25) {
            updateStep(step1, 1, "1. Segel Pabrik Asal", false, true);
            updateStep(step2, 2, "2. Jembatan Timbang Tol", false, false);
            updateStep(step3, 3, "3. Gerbang Bea Cukai (AEO)", false, false);
            updateStep(step4, 4, "4. Dermaga Kapal Pelabuhan", false, false);
            if (statusText) statusText.textContent = "Armada bergerak dari Kawasan Industri menuju Tol Pelabuhan.";
            if (checkpointMarker) checkpointMarker.style.opacity = "0";
        } else if (percent < 60) {
            updateStep(step1, 1, "1. Segel Pabrik Asal", true, false);
            updateStep(step2, 2, "2. Jembatan Timbang Tol", false, true);
            updateStep(step3, 3, "3. Gerbang Bea Cukai (AEO)", false, false);
            updateStep(step4, 4, "4. Dermaga Kapal Pelabuhan", false, false);
            if (statusText) statusText.textContent = "Jembatan Timbang: Beban gandar 31,450 KG lolos uji keselamatan jalan.";
            if (checkpointMarker && checkpointTag) {
                checkpointTag.textContent = "⚖️ Jembatan Timbang Tol (Lolos ODOL)";
                checkpointMarker.style.opacity = "1";
            }
        } else if (percent < 95) {
            updateStep(step1, 1, "1. Segel Pabrik Asal", true, false);
            updateStep(step2, 2, "2. Jembatan Timbang Tol", true, false);
            updateStep(step3, 3, "3. Gerbang Bea Cukai (AEO)", false, true);
            updateStep(step4, 4, "4. Dermaga Kapal Pelabuhan", false, false);
            if (statusText) statusText.textContent = "Bea Cukai: Gerbang RFID AEO memvalidasi Jalur Hijau Ekspor instan.";
            if (checkpointMarker && checkpointTag) {
                checkpointTag.textContent = "🛡️ Bea Cukai AEO (Jalur Hijau)";
                checkpointMarker.style.opacity = "1";
            }
        } else {
            updateStep(step1, 1, "1. Segel Pabrik Asal", true, false);
            updateStep(step2, 2, "2. Jembatan Timbang Tol", true, false);
            updateStep(step3, 3, "3. Gerbang Bea Cukai (AEO)", true, false);
            updateStep(step4, 4, "4. Dermaga Kapal Pelabuhan", true, true);
            if (statusText) statusText.textContent = "Tiba di Dermaga! STS Container Crane siap transfer muatan ke kapal kargo.";
            if (checkpointMarker && checkpointTag) {
                checkpointTag.textContent = "🚢 Quay Berth Dermaga Priok";
                checkpointMarker.style.opacity = "1";
            }
        }
    }, 50);

    // Transfer Truck & Cargo Config to RFQ Form
    if (btnTransferRfq) {
        btnTransferRfq.addEventListener("click", () => {
            const rfqSection = document.querySelector("#rfq");
            if (!rfqSection) return;

            const volumeInput = rfqSection.querySelector('input[name="cargo_volume"]');
            const notesInput = rfqSection.querySelector('textarea[name="additional_notes"]');
            const originInput = rfqSection.querySelector('input[name="origin_port"]');

            if (volumeInput) {
                volumeInput.value = fleetState.vehiclePayload;
            }
            if (originInput && !originInput.value) {
                originInput.value = "Kawasan Industri MM2100 &rarr; Pelabuhan Tanjung Priok";
            }
            if (notesInput) {
                const truckNote = `[Armada Pick-up: ${fleetState.vehicleName} (${fleetState.vehiclePower}) - Lolos Verifikasi Jembatan Timbang & Pabean AEO]`;
                if (!notesInput.value.includes("Armada Pick-up")) {
                    notesInput.value = notesInput.value ? notesInput.value + "\n" + truckNote : truckNote;
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
        });
    }

    // Replay / Reset Simulator
    if (btnReplay) {
        btnReplay.addEventListener("click", () => {
            fleetState.distance = 0;
            fleetState.speed = 0;
            fleetState.completed = false;
            fleetState.isCruising = false;
            fleetState.isGasPressed = false;
            fleetState.isBraking = false;
            updateGear("P");
            if (successBanner) successBanner.classList.add("hidden");
            if (statusText) statusText.textContent = "Menunggu keberangkatan armada di pabrik.";
            if (checkpointMarker) checkpointMarker.style.opacity = "0";
            if (odometer) odometer.textContent = "0.0 KM";
            if (progressLabel) progressLabel.textContent = "0%";
            if (progressBar) progressBar.style.width = "0%";
            if (speedMeter) speedMeter.textContent = "0";
        });
    }
}


