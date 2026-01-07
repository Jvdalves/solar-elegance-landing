import { motion, useInView } from "framer-motion";
import { useRef } from "react";
import { Smartphone, Car, GraduationCap, ArrowRight } from "lucide-react";

const opportunityCards = [
  {
    icon: Smartphone,
    period: "Em 1 Ano",
    title: "iPhone 16 Pro Max",
    value: "R$ 10.000",
    description:
      "Todo ano, você entrega um smartphone de topo de linha (ou uma viagem incrível de casal) para a concessionária.",
    highlighted: false,
  },
  {
    icon: Car,
    period: "Em 5 Anos",
    title: "Troca de Carro / Moto",
    value: "R$ 60.000+",
    description:
      "Em 5 anos, sua conta de luz pagou a entrada de um carro de luxo ou uma moto zero. Mas quem está dirigindo não é você.",
    highlighted: true,
    badge: "Objeto de Desejo",
  },
  {
    icon: GraduationCap,
    period: "Longo Prazo",
    title: "Faculdade / Aposentadoria",
    value: "R$ 500.000+",
    description:
      "Ao longo da vida útil do sistema, a economia acumulada paga uma faculdade de medicina ou garante sua aposentadoria.",
    highlighted: false,
  },
];

const OpportunityCostSection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });

  const scrollToContact = () => {
    const element = document.getElementById("contato");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section ref={ref} className="bg-background section-padding relative">
      {/* Top curve */}
      <div className="absolute top-0 left-0 right-0 h-24 overflow-hidden rotate-180">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" className="absolute bottom-0 w-full h-full">
          <path
            d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z"
            fill="hsl(210 40% 98%)"
          />
        </svg>
      </div>

      <div className="container mx-auto px-4 relative z-10">
        {/* Header */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6 }}
          className="text-center mb-16"
        >
          <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4">
            O que você faria com{" "}
            <span className="text-accent">R$ 800,00</span> a mais todo mês?
          </h2>
          <p className="text-foreground/60 text-lg max-w-2xl mx-auto">
            Esse é o valor médio desperdiçado na conta de luz. Veja o que esse dinheiro
            compraria se ficasse no seu bolso:
          </p>
        </motion.div>

        {/* Cards */}
        <div className="grid md:grid-cols-3 gap-6 lg:gap-8 mb-12">
          {opportunityCards.map((card, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 40 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className={`light-card relative ${
                card.highlighted ? "ring-2 ring-accent" : ""
              }`}
            >
              {card.badge && (
                <span className="absolute -top-3 right-4 badge-gold text-xs py-1 px-3">
                  {card.badge}
                </span>
              )}

              <div
                className={`w-14 h-14 rounded-2xl flex items-center justify-center mb-6 ${
                  card.highlighted ? "bg-accent" : "bg-forest/10"
                }`}
              >
                <card.icon
                  className={`w-6 h-6 ${
                    card.highlighted ? "text-accent-foreground" : "text-forest/60"
                  }`}
                />
              </div>

              <span className="text-sm font-semibold text-accent uppercase tracking-wider">
                {card.period}
              </span>

              <h3 className="font-display font-bold text-xl text-forest mt-2 mb-1">
                {card.title}
              </h3>

              <p className="font-display font-bold text-2xl text-accent mb-4">
                {card.value}
              </p>

              <p className="text-forest/60 text-sm leading-relaxed">
                {card.description}
              </p>
            </motion.div>
          ))}
        </div>

        {/* CTA */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.6 }}
          className="text-center"
        >
          <button
            onClick={scrollToContact}
            className="btn-gold inline-flex items-center gap-3 group"
          >
            Quero Esses Resultados Para Mim
            <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
          </button>

          <p className="text-foreground/40 text-sm mt-4">
            *Valores estimados considerando inflação energética média.
          </p>
        </motion.div>
      </div>
    </section>
  );
};

export default OpportunityCostSection;
